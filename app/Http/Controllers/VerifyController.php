<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EmployeeModel; // Import EmployeeModel
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Modify this method to use the authenticated user's ID directly
    public function verify(Request $request)
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Find the user by ID
        $user = User::where('id', $userId);

        if ($user) {
            // Fetch employee details
            $employee = EmployeeModel::where('employee_id', $user->id)->first();

            if ($employee) {
                // Store in session
                $lastTwoDigits = substr($user->id, -2);
                session([
                    'last_name' => $employee->last_name ?? null,
                    'first_name' => $employee->first_name ?? null,
                    'middle_name' => $employee->middle_name ?? null,
                    'employee_title' => $employee->job_title ?? null,
                    'lastTwoDigits' => $lastTwoDigits
                ]);

                // Authentication passed...
                return redirect()->intended('emp_ipcr');
            } else {
                // If employee details are not found
                return back()->withErrors([
                    'message' => 'Employee details not found.',
                ]);
            }
        } else {
            // If user is not found
            return back()->withErrors([
                'message' => 'User not found.',
            ]);
        }
    }
}
