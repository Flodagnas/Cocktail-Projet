<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirop extends Model
{
    use HasFactory;

    public function getAllSirop(){
        $Sirops = self::all();
        return $Sirops;
    }

    public function getSiropById($id) {
        return (self::where('id', $id));
    }

    public function getSiropByName($name){
        return (self::where('name', $name));
    }

    public function addSirops($name){
        self::create(['name' => $name]);
    }

    public function updateSirop($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteSirop($name){
        self::where('name', [$name])->delete();
    }
}
