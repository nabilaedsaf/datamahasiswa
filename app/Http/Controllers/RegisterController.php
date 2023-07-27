<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Alert;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', // Minimum 6 characters for the password
        ]);

        // Hash the password before storing it in the database
        $validatedData['password'] = Hash::make($validatedData['password']);

        $result = User::create($validatedData);

        if ($result) {
            Alert::success('Success', 'You\'ve Successfully Registered');
            return redirect()->route('login');
        } else {
            Alert::error('Failed', 'You\'ve Failed Registered');
            return redirect()->back();
        }
    }
}
