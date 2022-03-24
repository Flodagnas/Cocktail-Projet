<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Verre;

class VerreController extends Controller
{
    public function getAllVerre(){
        return (Verre::all());
    }

    public function getVerreById($id) {
        return (Verre::where('id', $id));
    }

    public function getVerreByName($name){
        return (Verre::where('name', $name));
    }

    public function addVerres($name){
        Verre::create(['name' => $name]);
    }

    public function updateVerre($name, $newName){
        Verre::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteVerre($name){
        Verre::where('name', [$name])->delete();
    }
}
