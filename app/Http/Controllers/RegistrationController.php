<?php

// app/Http/Controllers/RegistrationController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use NoCaptcha\Laravel\Facades\NoCaptcha;
use Illuminate\Support\Facades\Validator;

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

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole('user');


            Registration::create([
                'user_id' => $user->id,
                'pobox' => $request->pobox,
                'mob_no' => $request->mob_no,
                'office_no' => $request->office_no,
                'id_pass' => $request->id_pass,
                'country' => $request->country,
                'province' => $request->province,
                'city' => $request->city,
                'company' => $request->company,
                'del_address' => $request->del_address,
                'refrence' => $request->refrence,
                'passwordnews_platform' => $request->news_platform,

            ]);


            // Redirect to the index route with a success message
            return redirect()->route('login')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('An error occurred while creating the registration: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while creating the registration. Please try again.');
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'pobox' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mob_no' => 'required|string|max:255',
            'office_no' => 'required|string|max:255',
            'id_pass' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'del_address' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'confirm_password' => 'required|string|min:8',
        ]);

        $user = auth()->user();

        $user->update($request->all());

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }

    }
