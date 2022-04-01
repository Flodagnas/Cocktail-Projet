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
}
