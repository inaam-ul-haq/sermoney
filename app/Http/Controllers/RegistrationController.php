<?php

// app/Http/Controllers/RegistrationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use NoCaptcha\Laravel\Facades\NoCaptcha;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }
public function store(Request $request)
    {
        // Validate the form inputs and reCAPTCHA
        $validator = Validator::make($request->all(), [
            'pobox' => 'required|string',
            'email' => 'required|email',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'mob_no' => 'required|string',
            'office_no' => 'required|string',
            'id_pass' => 'required|string',
            'country' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'company' => 'required|string',
            'del_address' => 'required|string',
            'password' => 'required|string|confirmed',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the PoBox entry exists with the given email and pobox_no
        $poBox = PoBox::where('pobox_no', $request->pobox)->where('email', $request->email)->first();

        // If the PoBox entry does not exist, redirect back with an error message
        if (!$poBox) {
            return redirect()->back()->with('error', 'The provided P.O. Box number or email is incorrect. Please provide valid details.');
        }

        // Create a new registration if email and P.O. Box are valid
        try {
            Registration::create([
                'pobox' => $request->pobox,
                'email' => $request->email,
                'name' => $request->name,
                'last_name' => $request->last_name,
                'mob_no' => $request->mob_no,
                'office_no' => $request->office_no,
                'id_pass' => $request->id_pass,
                'country' => $request->country,
                'province' => $request->province,
                'city' => $request->city,
                'company' => $request->company,
                'del_address' => $request->del_address,
                'password' => bcrypt($request->password),
            ]);

            // Redirect to the index route with a success message
            return redirect()->route('carga')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('An error occurred while creating the registration: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while creating the registration. Please try again.');
        }
    }
    }