<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Alcool;

class AlcoolController extends Controller
{
    public function getAllAlcool(){
        return (Alcool::all());
    }

    public function getAlcoolById($id) {
        return (Alcool::where('id', $id));
    }

    public function getAlcoolByName($name){
        return (Alcool::where('name', $name));
    }

    public function addAlcools($name){
        Alcool::create(['name' => $name]);
    }

    public function updateAlcool($name, $newName){
        Alcool::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteAlcool($name){
        Alcool::where('name', [$name])->delete();
    }
}
