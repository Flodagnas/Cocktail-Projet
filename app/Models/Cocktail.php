<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    public $fillable = ['name', 'degré', 'verre', 'alcool', 'soft', 'sirop', 'fruit'];
    use HasFactory;

    public function getAllCocktail(){
        $cocktails = self::all();
        return $cocktails;
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
