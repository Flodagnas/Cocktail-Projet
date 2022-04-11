<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcools extends Model
{
    public $fillable = ['name', 'photo'];
    use HasFactory;

    public function getAllAlcool(){
        $alcools = self::all();
        return $alcools;
    }

    public function getAlcoolById($id) {
        return (self::where('id', $id));
    }

    public function getAlcoolByName($name){
        return (self::where('name', $name));
    }

    public static function addAlcools($name, $url){
        self::create(['name' => $name, 'photo' => $url]);
    }

    public function updateAlcool($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteAlcool($name){
        self::where('name', [$name])->delete();
    }
}
