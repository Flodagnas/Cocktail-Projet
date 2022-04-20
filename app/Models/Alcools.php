<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alcools extends Model
{
    public $fillable = ['name', 'photo', 'Type_Alcool'];
    use HasFactory;

    public function Alcools()
    {
        return $this->belongsTo('App\Models\type_alcools', "id");
    }

    public function getAlcoolById($id) {
        return (self::where('id', $id));
    }

    public function getAlcoolByName($name){
        return (self::where('name', $name));
    }

    public static function addAlcools($name, $url, $type){
        self::create(['name' => $name, 'photo' => $url, 'Type_Alcool'=>$type]);
    }

    public function updateAlcool($name, $newName){
        self::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteAlcool($name){
        self::where('name', [$name])->delete();
    }
}
