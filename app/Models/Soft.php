<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soft extends Model
{
    //use HasFactory;

    public function getAllSoft(){
        $softs = self::all();
        return $softs;
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
