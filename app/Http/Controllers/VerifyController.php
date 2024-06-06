<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function verify(Request $request)
    {
        $credentials = [
            'id' => $request->input('id'),
            'password' => $request->input('password'),
        ];

        // Find the user by ID
        $user = User::where('id', $credentials['id'])->first();

        if ($user && $user->password === $credentials['password']) {
            // Manually log in the user
            Auth::login($user);

            // Extract the last two digits of the user's ID
            $userId = $user->id;
            $lastTwoDigits = substr((string)$userId, -2);

            // Pass the last two digits to the view
            return redirect()->intended('emp_ipcr')->with('lastTwoDigits', $lastTwoDigits);
        } else {
            // Authentication failed...
            return back()->withErrors([
                'message' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
    
