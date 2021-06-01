<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Resources\UserResource as UserResource;

class UserController extends Controller
{
    public function getusers() 
    {
        $user = User::get();
        return UserResource::collection($users);
    }
}
