<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Verre;

class VerreController extends Controller
{
    public function displayAllVerres(){
        $verres = Verre::all();
        return view('verre', compact('verres'));
    }
}
