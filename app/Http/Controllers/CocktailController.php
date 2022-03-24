<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function getAllCocktail(){
        return (Cocktail::all());
    }

    public function getCocktailById($id) {
        return (Cocktail::where('id', $id));
    }

    public function getCocktailByName($name){
        return (Cocktail::where('name', $name));
    }

    public function addCocktails($name){
        Cocktail::create(['name' => $name]);
    }

    public function updateCocktail($name, $newName){
        Cocktail::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteCocktail($name){
        Cocktail::where('name', [$name])->delete();
    }
}
