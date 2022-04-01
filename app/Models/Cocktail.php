<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    public function getAllCocktail(){
        $Cocktails = self::all();
        return $Cocktails;
    }

    public function getCocktailById($id) {
        return (self::where('id', $id));
    }

    public function getCocktailByName($name){
        return (self::where('name', $name));
    }

    public function addCocktails($name){
        self::create(['name' => $name]);
    }

    public function updateCocktail($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteCocktail($name){
        self::where('name', [$name])->delete();
    }
}
