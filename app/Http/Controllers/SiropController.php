<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sirop;

class SiropController extends Controller
{
    public function displayAllSirops(){
        $sirops = Sirop::all();
        return view('sirop', compact('sirops'));
    }

    public static function AddSirop(Request $request){
        $name = $request->input('name');
        $img = $request->input('url');
        Sirop::addSirops($name, $img);
        return redirect()->route('Sirops');
    }
}
