<?php

namespace App\Http\Controllers;

use App\Mail\ActivationEmail;
use App\Models\PoBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class PoBoxNoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:po_boxes,email',
            'g-recaptcha-response' => 'required|captcha',
        ]);

    
        // Generate or fetch PO Box number from the database
       $poBoxNumber = PoBox::max('pobox_no') ?? 200; // Get the maximum PO Box number or set it as 200 if no records exist
        $poBoxNumber++; // Increment the PO Box number

        // Create new PoBox record with generated PO Box number
        $poBox = PoBox::create([
            'name' => $request->name,
            'email' => $request->email,
            'pobox_no' => $poBoxNumber
        ]);

        try {
            // Send activation email with the PO Box number
            Mail::to($request->email)->send(new ActivationEmail($poBoxNumber,$request->name));
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error sending email: ' . $e->getMessage());
            // Optionally, you can return a response with an error message
            return redirect()->back()->with('error', 'Failed to send email. Please try again later.');
        }

        // return redirect()->route('po-reg.create')->with('success', 'PO Box code sent to your email successfully');
        return redirect()->route('po-reg.create')->with('success', 'PO Box code sent to your email successfully');
    }
}
