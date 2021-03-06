<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirop extends Model
{
    use HasFactory;
    public $fillable = ['name', 'photo'];

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

    public static function addSirops($name, $photo){
        Sirop::create(['name' => $name, 'photo' => $photo]);
    }

    public function updateSirop($name, $newName){
        Sirop::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteSirop($name){
        Sirop::where('name', [$name])->delete();
    }

}
