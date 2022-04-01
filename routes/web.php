<?php

use App\Http\Controllers\AlcoolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Sirops', function () {
    return view('sirop');
});

Route::get('/Alcools', [AlcoolController::class, 'displayAllAlcools']);

Route::get('/Fruits', function () {
    return view('fruit');
});

Route::get('/Softs', function () {
    return view('soft');
});

Route::get('/Verres', function () {
    return view('verre');
});