<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Soft;

class SoftController extends Controller
{
    public function displayAllSofts(){
        $softs = Soft::all();
        return view('soft', compact('softs'));
    }

    public static function AddSoft(Request $request){
        $name = $request()->input('name');
        $img = $request()->input('url');
        Soft::addSofts($name, $img);
        return redirect()->route('Softs');
    }
}
