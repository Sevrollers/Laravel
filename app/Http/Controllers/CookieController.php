<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Http\Controllers\PagesController;

class CookieController extends Controller
{
    public static function setCookie($email, $name) {
        $minutes = 120;
        // $response = new Response('Tersimpan');
        // $response->withCookie(cookie('email', $email , $minutes));
        // $response->withCookie(cookie('name', $name , $minutes));

        return redirect('/')->withCookie(cookie('email', $email, $minutes))->withCookie(cookie('name', $name , $minutes));
     }
     
     public static function getCookie(Request $request) {
        $email = $request->cookie('email');
        $name = $request->cookie('name');
        return response()->json([
            "email"   => $email,
            "name" => $name
        ], 200);
     }
}
