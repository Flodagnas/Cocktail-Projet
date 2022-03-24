<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Fruit;

class FruitController extends Controller
{
    public function getAllFruit(){
        return (Fruit::all());
    }

    public function getFruitById($id) {
        return (Fruit::where('id', $id));
    }

    public function getFruitByName($name){
        return (Fruit::where('name', $name));
    }

    public function addFruits($name){
        Fruit::create(['name' => $name]);
    }

    public function updateFruit($name, $newName){
        Fruit::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteFruit($name){
        Fruit::where('name', [$name])->delete();
    }
}
