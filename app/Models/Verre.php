<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verre extends Model
{
    //use HasFactory;

    public function getAllVerre(){
        $verres = self::all();
        return $verres;
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
