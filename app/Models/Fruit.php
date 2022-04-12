<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    public $fillable = ['name', 'photo'];

    public function getAllFruit(){
        $fruits = self::all();
        return $fruits;
    }

    public function getFruitById($id) {
        return (Fruit::where('id', $id));
    }

    public function getFruitByName($name){
        return (Fruit::where('name', $name));
    }

    public static function addFruits($name, $urlImage){
        Fruit::create(['name' => $name, 'photo' => $urlImage]);
    }

    public function updateFruit($name, $newName){
        Fruit::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteFruit($name){
        Fruit::where('name', [$name])->delete();
    }

    
}
