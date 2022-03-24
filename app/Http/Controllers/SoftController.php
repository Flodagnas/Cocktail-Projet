<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Soft;

class SoftController extends Controller
{
    public function getAllSoft(){
        return (Soft::all());
    }

    public function getSoftById($id) {
        return (Soft::where('id', $id));
    }

    public function getSoftByName($name){
        return (Soft::where('name', $name));
    }

    public function addSofts($name){
        Soft::create(['name' => $name]);
    }

    public function updateSoft($name, $newName){
        Soft::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteSoft($name){
        Soft::where('name', [$name])->delete();
    }
}
