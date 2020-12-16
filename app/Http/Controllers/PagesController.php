<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pizza;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function login()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public static function home()
    {
        return view('homeGuest');
    }
    public function detail()
    {
        return view('detail');
    }
}
