<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cocktail;

class CocktailController extends Controller
{
    public function displayAllCocktails(){
        $cocktails = Cocktail::all();
        return view('cocktail', compact('cocktails'));
    }
}
