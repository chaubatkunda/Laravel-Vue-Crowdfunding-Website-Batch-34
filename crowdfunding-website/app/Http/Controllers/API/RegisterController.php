<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\UserRegisterMail;
use App\OtpCode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email'
        ]);
        $ex = date('Y-m-d', strtotime("+1 days"));

        $user =  User::create([
            'role_id'   => 0,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Mail::to($user->email)->send(new UserRegisterMail($user));
        OtpCode::create([
            'user_id'   => $user->id,
            'otp'       => mt_rand(0000, 9999),
            'valid_until'   => $ex
        ]);

        return response()->json([
            'status' => 'success'
        ], 200);
    }

    public function show(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
