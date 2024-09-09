<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\PhoneNumberRange;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'phone_number' => ['required', 'integer','unique:users', new PhoneNumberRange],
            'password' => 'required|string|confirmed|min:5',
            'agreement' => 'required|accepted',
        ]);

        $user = User::create([
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        Auth::login($user);

        return redirect('home');
    }


}
