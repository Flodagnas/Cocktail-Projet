<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_alcools extends Model
{
    use HasFactory;

    public function Cocktails(){
        return $this->hasMany('App\Models\Alcools');
    }
}
