<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingCorntoller extends Controller
{
    public function index()

{
    return view('admindashboard.Tracking');
}
}
