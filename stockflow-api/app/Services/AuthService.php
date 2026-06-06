<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login(array $credentials)
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return null;
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return null;
        }

        $token = $user->createToken('stockflow-token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token,
        ];
    }
}
