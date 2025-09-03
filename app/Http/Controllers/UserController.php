<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser(Request $request){
         $request->validate([
        "username" => "required|string|max:12",
        "email"    => "required|email|unique:users,email",
        "password" => "required|min:6",
    ]);

    $createUser = User::create([
        "name"     => $request->input('username'),
        "email"    => $request->input('email'),
        "password" => Hash::make($request->input('password')),
    ]);

    if ($createUser) {
        return view('user.register')->with(['response' => "User created successfully!"]);
    } else {
        return view('user.register')->with(['response' => "User creation failed."]);
    }
    }
}
