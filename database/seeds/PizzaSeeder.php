<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pizza')->insert([
            'name' => "Cheese Bomb",
            'description' => 'Pizza with 1kg cheese, tomato sauce, and crispy side',
            'price' => 80000,
            'photo' => "CB.jpg",
        ]);
        DB::table('Pizza')->insert([
            'name' => "Tuna Man",
            'description' => 'Pizza with Tuna, onions, and caoted with tomato sauce',
            'price' => 100000,
            'photo' => "TM.jpg",
        ]);
        DB::table('Pizza')->insert([
            'name' => "Classic Pepperoni",
            'description' => 'Pizza with classic pepperoni, smoked beef and coated with tomato sauce',
            'price' => 75000,
            'photo' => "CP.jpg",
        ]);
        DB::table('Pizza')->insert([
            'name' => "Lamb and Onion",
            'description' => 'Pizza with smoked lamb, onions, and coated with our special sauce',
            'price' => 85000,
            'photo' => "LO.jpeg",
        ]);
        DB::table('Pizza')->insert([
            'name' => "Hawaiian",
            'description' => 'Pizza smoked beef, slice of pineapple and coated with secret sauce',
            'price' => 90000,
            'photo' => "HP.jpg",
        ]);
        DB::table('Pizza')->insert([
            'name' => "Homemade BBQ Chicken",
            'description' => 'Pizza with chicken, pepperoni, and coated with bbq sauce',
            'price' => 75000,
            'photo' => "HBBP.jpg",
        ]);
    }
}
