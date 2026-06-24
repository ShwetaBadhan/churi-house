<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactLead;
use Illuminate\Support\Facades\Http;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ContactLeadController extends Controller
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
                    'subject' => [
                        'nullable',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'message' => [
                        'nullable',
                        'max:5000',
                        'regex:/^(?!.*(<|>|script|onload|onclick|javascript:)).*$/i'
                    ],
                ]);

                $contact = ContactLead::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'ip' => $request->ip(),
                ]);

                // Send Admin Email
                Mail::to(env('MAIL_FROM_ADDRESS'))->send(
                   new ContactMail($contact, 'admin')
                );

                // Send Customer Email
                Mail::to($contact->email)->send(
                    new ContactMail($contact, 'customer')
                );


                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for contacting us, We will get back to you soon!'
                ], 200);

            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again.'
                ], 500);
            }
        }

        // Normal form submission (fallback)
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'email' => ['required', 'regex:/^[^<>{}()*$!;:=\[\]]+$/'],
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'subject' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'message' => ['nullable', 'max:5000', 'regex:/^(?!.*(<|>|script|onload|onclick|javascript:)).*$/i'],
        ]);

        $contact = ContactLead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        // Send Admin Email
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(
           new ContactMail($contact, 'admin')
        );

        // Send Customer Email
        Mail::to($contact->email)->send(
            new ContactMail($contact, 'customer')
        );


        return redirect()->back()->with('success', 'Thank you for reaching out to Churi House!  We\'ve received your message and will get back to you shortly.');
    }

}
