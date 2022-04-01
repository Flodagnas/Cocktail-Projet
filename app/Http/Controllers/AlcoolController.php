<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alcool;

class AlcoolController extends Controller
{
   public function displayAllAlcools(){
       $data['alcools'] = Alcool::all();
       return view('alcool') -> with('alcools', $data);
    }

}
