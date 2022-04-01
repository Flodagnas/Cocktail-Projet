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

Route::get('/Sirops', [SiropController::class, 'displayAllSirops']);

Route::get('/Alcools', [AlcoolController::class, 'displayAllAlcools']);

Route::get('/Fruit', [FruitController::class, 'displayAllFruits']);

Route::get('/Softs', [SoftController::class, 'displayAllSofts']);

Route::get('/Verres', [VerreController::class, 'displayAllVerres']);