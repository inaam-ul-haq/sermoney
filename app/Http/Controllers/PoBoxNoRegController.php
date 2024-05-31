<?php

namespace App\Http\Controllers;

use App\Models\PoBox;
use App\Models\Registration;
use Illuminate\Http\Request;


class PoBoxNoRegController extends Controller
{
    public function create()
    {
        return view('po-register');
    }
public function store(Request $request)
    {
        // Check if the email exists in the PoBox table
        $poBox = PoBox::where('email', $request->email)->first();;
        // dd($poBox->pobox_no);
        if (!$poBox) {
            return redirect()->back()->with('error', 'The provided email does not exist. Please provide a valid email.');
        }
        if ($poBox->pobox_no == $request->pobox) {

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

            return redirect()->route('index')->with('success', 'Registration successful!');
        } else {
            return redirect()->back()->with('error', "Po Box Incorrect");
        }
    }
}
