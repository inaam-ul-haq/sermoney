<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $user = Auth::user();

        $register = Registration::where('user_id', $user->id)->first();
        return view('userdashboard.profile', compact('user', 'register'));
    }
    
    public function adminPanel()
{
    $user = Auth::user();
    $registration = $user->registration; // Fetch the associated registration details

    return view('admindashboard.perfil', compact('user', 'registration'));
}
    public function edit(Request $request): View
    {
        $user = $request->user();
        $registration = Registration::where('user_id', $user->id)->first();
    
        return view('profile.edit', [
            'user' => $user,
            'registration' => $registration,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $userRules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|confirmed',
        ];
    
        $registrationRules = [
            'creation_date' => 'required|date',
            'reference' => 'required|in:Add,Staf,RepostingAgents',
            'referral' => 'required|in:Google,FaceBook,Insta',
            'mob_no' => 'required|string|max:255',
            'office_no' => 'required|string|max:255',
            'username' => 'string|max:255',
            'id_pass'=>'string',
            'del_address'=>'string|max:255'
        ];
    
        $this->validate($request, $userRules);
        $this->validate($request, $registrationRules);
    
        $userData = $request->only(['name', 'email', 'password']);
        $registrationData = $request->only(['creation_date', 'reference', 'referral', 'mob_no', 'office_no', 'username', 'id_pass', 'del_address']);
        $user = Auth::user();
        $user->update($userData);
        $registration = $user->registration ?: new Registration();
        $registration->fill($registrationData);
        $user->registration()->save($registration);
    
        return redirect()->back()->with(['success' => 'Profile updated successfully']);
    }
    
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
