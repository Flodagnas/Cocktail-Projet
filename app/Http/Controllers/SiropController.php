<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Sirop;

class SiropController extends Controller
{
    public function getAllSirop(){
        return (Sirop::all());
    }

    public function getSiropById($id) {
        return (Sirop::where('id', $id));
    }

    public function getSiropByName($name){
        return (Sirop::where('name', $name));
    }

    public function addSirops($name){
        Sirop::create(['name' => $name]);
    }

    public function updateSirop($name, $newName){
        Sirop::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteSirop($name){
        Sirop::where('name', [$name])->delete();
    }
}
