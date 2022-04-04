<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fruit;

class FruitController extends Controller
{
    public function displayAllFruits(){
        $fruits = Fruit::all();
        return view('fruit', compact('fruits'));
    }
}
