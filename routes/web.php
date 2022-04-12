<?php

use App\Http\Controllers\AlcoolsController;
use App\Http\Controllers\SiropController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\SoftController;
use App\Http\Controllers\VerreController;
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
    return view('cocktail');
});

Route::get('/Sirops', [SiropController::class, 'displayAllSirops'])->name('Sirops');
Route::post('/Sirop/new', [SiropController::class ,'AddFruits'])->name('newSirop');

Route::get('/Alcools', [AlcoolsController::class, 'displayAllAlcools'])->name('Alcools');
Route::post('/Alcool/new', [AlcoolsController::class ,'AddAlcool'])->name('newAlcool');

Route::get('/Fruits', [FruitController::class, 'displayAllFruits'])->name('Fruits');
Route::post('/Fruit/new', [FruitController::class ,'AddFruits'])->name('newFruit');

Route::get('/Softs', [SoftController::class, 'displayAllSofts'])->name('Softs');
Route::post('/Soft/new', [SoftController::class ,'AddVerre'])->name('newSoft');

Route::get('/Verres', [VerreController::class, 'displayAllVerres'])->name('Verres');
Route::post('/Verre/new', [VerreController::class ,'AddVerre'])->name('newVerre');