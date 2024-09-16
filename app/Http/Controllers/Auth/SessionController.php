<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('pages.auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'phone_number' => ['required','integer', 'exists:users,phone_number'],
            'password' => ['required'],
        ],
        [
            'phone_number.required' => 'Please enter your phone number.',
            'phone_number.integer' => 'Please enter your phone number correctly.',
            'phone_number.exists' => 'The phone number you entered does not exist in our records.',
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'phone_number' => 'Sorry, those credentials do not match.',
            ]);
        }

        request()->session()->regenerate();

        return redirect()->route('home');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
