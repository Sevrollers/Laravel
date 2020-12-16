<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use Dotenv\Result\Result;

class PizzaController extends Controller
{
    public function create(){
        return view('homeGuest');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:20'],
            'description' => ['required', 'string', 'min:20'],
            'price' => ['required', 'numeric', 'min:10000'],
            'image' => ['required', 'image']
        ]);

        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $ext = $request->file('image')->getClientOriginalExtension();
        $storedFile = $fileName.'_'.time().'.'.$ext;
        $path = $request->file('image')->storeAs('assets', $storedFile);

        $pizza = new Pizza;
        $pizza->pizza_name = $request->name;
        $pizza->pizza_description = $request->description;
        $pizza->pizza_price = $request->price;
        $pizza->pizza_image = '/assets'.$storedFile;
        $pizza->save();

        return redirect('/')->with('success', 'Pizza Created Successfully');
    }

    public function show($id){
        $pizza = Pizza::find($id);
        return view('homeGuest')->with('pizza',$pizza);
    }

    public function edit($id){
        $pizza = Pizza::find($id);
        return view('edit')->with('pizza', $pizza);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => ['required'. 'string', 'max:20'],
            'description' => ['required'. 'string', 'min:20'],
            'price' => ['required'. 'numeric', 'min:10000'],
            'image' => ['required'. 'image']
        ]);

        $fileNameWithExt = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $ext = $request->file('image')->getClientOriginalExtension();
        $storedFile = $fileName.'_'.time().'.'.$ext;
        $path = $request->file('image')->storeAs('assets', $storedFile);

        $pizza = Pizza::find($id);
        $pizza->pizza_name = $request->name;
        $pizza->pizza_description = $request->description;
        $pizza->pizza_price = $request->price;
        $pizza->pizza_image = '/assets'.$storedFile;
        $pizza->save();

        return redirect('/')->with('success', 'Pizza Edited Successfully');

    }

    public function destroy($id){
        $pizza = Pizza::find($id);
        $pizza->delete();
        return redirect('/')->with('success', 'Pizza Deleted Successfully');
    }

    public function delete($id){
        $pizza = Pizza::find($id);
        return view('delete')->with('pizza', $pizza);
    }

}
