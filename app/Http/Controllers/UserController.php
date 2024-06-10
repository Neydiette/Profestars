<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'El Correo ya esta registrado', 'errors' => $validator->errors()], 422);
        }

        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        
        $accessToken = $user->createToken('authToken')->accessToken;

        
        return response()->json(['message' => 'Usuario registrado exitosamente', 'access_token' => $accessToken], 201);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            
            $accessToken = $user->createToken('authToken')->accessToken;
            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'id' => $user->id,
                'access_token' => $accessToken
            ]);
        } else {
            
            return response()->json(['message' => 'Credenciales inválidas'], 401);
        }
    }
}
