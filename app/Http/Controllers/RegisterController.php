<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        // $users = Registration::where('pobox', '!=', '0')->get();
        $users = User::whereHas('registration', function ($query) {
            $query->where('pobox', '!=', '0');
        })->with('registration')->get();

        return view('admindashboard.fractuion',compact('users'));
    }
    public function view($id)
    {
        $user = User::findOrFail($id);
        return view('admindashboard.userdatails.view', compact('user'));
    }
}
