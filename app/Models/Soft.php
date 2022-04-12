<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soft extends Model
{
    use HasFactory;
    public $fillable = ['name', 'photo'];

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

    public static function addSofts($name, $photo){
        Soft::create(['name' => $name, 'photo' => $photo]);
    }

    public function updateSoft($name, $newName){
        Soft::where('name', [$name])->update(['name' => $newName]);
    }

    public function deleteSoft($name){
        Soft::where('name', [$name])->delete();
    }

}
