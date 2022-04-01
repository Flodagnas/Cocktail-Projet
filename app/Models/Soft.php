<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soft extends Model
{
    use HasFactory;

    public function getAllSoft(){
        $Softs = self::all();
        return $Softs;
    }

    public function getSoftById($id) {
        return (self::where('id', $id));
    }

    public function getSoftByName($name){
        return (self::where('name', $name));
    }

    public function addSofts($name){
        self::create(['name' => $name]);
    }

    public function updateSoft($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteSoft($name){
        self::where('name', [$name])->delete();
    }
}
