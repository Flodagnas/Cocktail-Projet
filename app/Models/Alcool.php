<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcool extends Model
{
    protected $fillable = ['name'];
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

    public static function addAlcools($name){
        self::create(['name' => $name]);
    }

    public function updateAlcool($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteAlcool($name){
        self::where('name', [$name])->delete();
    }
}
