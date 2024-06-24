<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Query to filter users based on search term
        $users = User::whereHas('registration', function ($query) use ($search) {
            $query->where('pobox', '!=', '0');
        })
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%");
            })
            ->with('registration')
            ->orderBy('id', 'desc')
            ->paginate(10); // Adjust the pagination as per your requirement

        $Totaluser = Registration::count(); // Total count of registrations

        return view('admindashboard.fractuion', compact('users', 'Totaluser', 'search'));
    }    public function view($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);

    }
    public function updateStatus(Request $request, $id)
    {
         $request->validate([
            'status' => 'required|string|max:255'
        ]);

        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->status = $request->input('status');
        $user->save();

        return response()->json(['message' => 'Status updated successfully', 'user' => $user], 200);
    }
}
