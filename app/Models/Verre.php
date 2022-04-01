<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verre extends Model
{
    use HasFactory;

    public function getAllVerre(){
        $Verres = self::all();
        return $Verres;
    }

    public function getVerreById($id) {
        return (self::where('id', $id));
    }

    public function getVerreByName($name){
        return (self::where('name', $name));
    }

    public function addVerres($name){
        self::create(['name' => $name]);
    }

    public function updateVerre($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteVerre($name){
        self::where('name', [$name])->delete();
    }
}
