<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alcool;

class AlcoolController extends Controller
{
    public function displayAllAlcools(){
       $alcools = Alcool::all();
       return view('alcool', compact('alcools'));
    }

    public static function AddAlcool(Request $request){
        protected $name = $request->input('name');
        Alcool::addAlcools($name);
    }
}
