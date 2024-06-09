<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PoBox;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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
// dd($request->all());
            $user = User::create([
                'name' => $request->name,
                'last_name'=>$request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);


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
                'news_platform' => $request->news_platform,
            ]);

            return redirect()->route('login')->with('success', 'Registration successful! Please login to Precreed Further');
        } else {
            return redirect()->back()->with('error', "Po Box Incorrect");
        }
    }
}
