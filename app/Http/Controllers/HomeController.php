<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pizza;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pizza = DB::table('pizza')->paginate(6);
        return view('homeGuest')->with('pizza',$pizza);
    }
    public function search(Request $request)
    {
        $pizza_name = $request->name;
        $pizza = DB::table('pizza')->where('pizza_name', 'like', '%'.$pizza_name.'%')->paginate(6);
    }
}
