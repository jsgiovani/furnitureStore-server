<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreAuthRegister;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    //register new user
    public function register(StoreAuthRegister $request){
        $request->validated($request->all());

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);


        return response([
            'user' => $user,
            'token' => $user->createToken("API Token of $user->name")->plainTextToken,
        ],200);
    }


    public function login(LoginRequest $request){
        $request->validated($request->all());

        if (!Auth::attempt($request->all())) {
            return response([
                'errors' => ['Credencials do not match']
            ], 402);
        }


        $user = User::where('email', $request->email)->first();

        return response([
            'user' => new UserResource($user),
            'token' =>$user->createToken("API Token of $user->name")->plainTextToken,
        ],200);

    }


    public function logout(Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();

        
    }


    

}
