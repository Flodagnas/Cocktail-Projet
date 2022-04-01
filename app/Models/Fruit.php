<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    public function getAllFruit(){
        $Fruits = self::all();
        return $Fruits;
    }

    public function getFruitById($id) {
        return (self::where('id', $id));
    }

    public function getFruitByName($name){
        return (self::where('name', $name));
    }

    public function addFruits($name){
        self::create(['name' => $name]);
    }

    public function updateFruit($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteFruit($name){
        self::where('name', [$name])->delete();
    }
}
