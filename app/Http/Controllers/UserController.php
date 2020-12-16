<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public static function getByEmail($email)
    {
        $user = User::where('email', $email)->first();

        return $user;
    }
}
