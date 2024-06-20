<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingCorntoller extends Controller
{
    public function index()

{
    return view('admindashboard.Tracking');
}
    public function fetchData()
    {
        try {
            $response = Http::get('https://fastcargotracking.com/tracking');
            return response()->json($response->body());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch tracking data.'], 500);
        }
    }
}
