<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
// use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiTokenController extends Controller
{
    public function createToken(Request $request) {
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)) {
            return response(['errors'=>'Такого пользователя не существует'], 401);
        }
        return ['token' => $user->createToken($request->email)->plainTextToken];
    }
}
