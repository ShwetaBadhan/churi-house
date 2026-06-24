<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\SubscribeMail;
use Illuminate\Support\Facades\Mail;
class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        // Check if request is AJAX
        if ($request->ajax()) {
            try {
                $recaptcha = $request->input('g-recaptcha-response');

                $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptcha,
                    'remoteip' => $request->ip(),
                ]);

                $result = $response->json();

                if (!$result['success'] || $result['score'] < 0.5) {
                    return response()->json([
                        'success' => false,
                        'message' => 'reCAPTCHA verification failed. Please try again.'
                    ], 422);
                }
                $request->validate([

                    'email' => [
                        'required',
                        'regex:/^[^<>{}()*$!;:=\[\]]+$/'
                    ],

                ]);

                $subscriber = Subscribe::create([
                    'email' => $request->email,
                ]);

                Mail::to(env('MAIL_FROM_ADDRESS'))
                    ->send(new SubscribeMail($subscriber, 'admin'));

                Mail::to($subscriber->email)
                    ->send(new SubscribeMail($subscriber, 'customer'));

                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for Subscribe us, We will get back to you soon!'
                ], 200);

            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'error' => [
                        'message' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                        'trace' => $e->getTraceAsString(),
                    ]
                ], 500);
            }
        }

        // Normal form submission (fallback)
        $request->validate([
            'email' => ['required', 'regex:/^[^<>{}()*$!;:=\[\]]+$/'],
        ]);

        $subscriber = Subscribe::create([
            'email' => $request->email,
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new SubscribeMail($subscriber, 'admin'));

        Mail::to($subscriber->email)
            ->send(new SubscribeMail($subscriber, 'customer'));

        return redirect()->back()->with('success', 'Thank you for reaching out to Churi House!  We\'ve received your message and will get back to you shortly.');
    }
}
