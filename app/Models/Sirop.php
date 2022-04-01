<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirop extends Model
{
    //use HasFactory;

    public function getAllSirop(){
        $sirops = self::all();
        return $sirops;
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
