<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    /**
     * Display the specified resource.
     */
    public function user(Request $request)
    {
        $user = $request->user();
        return new UserResource($user);
    }

}
