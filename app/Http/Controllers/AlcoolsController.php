<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alcools;

class AlcoolsController extends Controller
{
    public function displayAllAlcools(){
       $alcools = Alcools::all();
       return view('alcool', compact('alcools'));
    }

    public static function AddAlcool(Request $request){
        $name = $request->input('name');
        $url = $request->input('url');
        $type = $request->input('type');
        Alcools::addAlcools($name, $url, $type);
        return redirect()->route('Alcools');
    }
}
