<?php

// app/Http/Controllers/RegistrationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pobox' => 'required|string',
            'email' => 'required|email|unique:registrations,email',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'mob_no' => 'required|string',
            'ofice_no' => 'required|string',
            'id_pass' => 'required|string',
            'country' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'company' => 'required|string',
            'del_address' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        Registration::create($request->all());

        return redirect()->route('registrations.create')->with('success', 'Registration successful.');
    }
}
