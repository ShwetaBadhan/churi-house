<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;
use Illuminate\Support\Facades\Http;

class FranchiseController extends Controller
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

                    'location' => [
                        'nullable',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'address' => [
                        'nullable',
                        'regex:/^[a-zA-Z0-9\s,\.\-\/#]{2,255}$/'
                    ],
                    'message' => [
                        'nullable',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'type' => [
                        'nullable',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],

                ]);

                Franchise::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'location' => $request->location,
                    'address' => $request->address,
                    'message' => $request->message,
                    'type' => $request->type,
                    'ip' => $request->ip(),
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Franchise Application Received! Welcome to the first step of partnering with Churi House.'
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

            'location' => [
                'nullable',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],
            'address' => [
                'nullable',
                'regex:/^[a-zA-Z0-9\s,\.\-\/#]{2,255}$/'
            ],
            'message' => [
                'nullable',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],
            'type' => [
                'nullable',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],
        ]);

        Franchise::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'address' => $request->address,
            'message' => $request->message,
            'type' => $request->type,
            'ip' => $request->ip(),
        ]);

        return redirect()->back()->with('success', 'Franchise Application Received! Welcome to the first step of partnering with Churi House.');
    }
}
