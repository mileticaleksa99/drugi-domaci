<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['user' => $user, 'token' => $token]);
        } else {
            return response()->json(['error' => 'Uneti podaci nisu ispravni.'], 401);
        }
    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Uspešno ste se odjavili.']);
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);
        $user = new \App\Models\User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // TODO: Hash password
        ]);
        $user->save();
        return response()->json(['message' => 'Uspešno ste se registrovali.'], 201);
    }
}
