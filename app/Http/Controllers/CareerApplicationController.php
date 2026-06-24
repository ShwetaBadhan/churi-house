<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Http;
use App\Mail\CareerMail;
use Illuminate\Support\Facades\Mail;

class CareerApplicationController extends Controller
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
                    'name' => [
                        'required',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'email' => [
                        'required',
                        'regex:/^[^<>{}()*$!;:=\[\]]+$/'
                    ],
                    'phone' => [
                        'required',
                        'regex:/^[6-9]\d{9}$/'
                    ],
                    'position' => [
                        'nullable',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'experience' => [
                        'nullable',
                        'numeric',
                        'min:0'
                    ],
                    'location' => [
                        'nullable',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],

                ]);

                $career = CareerApplication::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'position' => $request->position,
                    'experience' => $request->experience,
                    'location' => $request->location,
                    'ip' => $request->ip(),
                ]);

                // Admin Email
                Mail::to(env('MAIL_FROM_ADDRESS'))
                    ->send(new CareerMail($career, 'admin'));

                // Customer Email
                Mail::to($career->email)
                    ->send(new CareerMail($career, 'customer'));


                return response()->json([
                    'success' => true,
                    'message' => 'Career Application received!  Get ready to discover timeless elegance at Churi House.'
                ], 200);

            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => $e->getMessage(),
                    'line' => $e->getLine(),
                ], 500);
            }
        }

        // Normal form submission (fallback)
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'email' => ['required', 'regex:/^[^<>{}()*$!;:=\[\]]+$/'],
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'position' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'experience' => [
                'nullable',
                'numeric',
                'min:0'
            ],
            'location' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
        ]);

        $career = CareerApplication::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'experience' => $request->experience,
            'location' => $request->location,
            'ip' => $request->ip(),
        ]);

        // Admin Email
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new CareerMail($career, 'admin'));

        // Customer Email
        Mail::to($career->email)
            ->send(new CareerMail($career, 'customer'));


        return redirect()->back()->with('success', 'Thank you for applying! Your application has been submitted successfully. We will review your profile and get back to you soon..');
    }
}
