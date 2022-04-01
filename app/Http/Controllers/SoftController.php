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
}
