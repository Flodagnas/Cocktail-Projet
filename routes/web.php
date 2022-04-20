<?php

use App\Http\Controllers\AlcoolsController;
use App\Http\Controllers\CocktailController;
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

Route::get('/', [CocktailController::class, 'displayAllCocktails']);

Route::get('/Sirops', [SiropController::class, 'displayAllSirops'])->name('Sirops');
Route::post('/Sirop/new', [SiropController::class ,'AddSirop'])->name('newSirop');

Route::get('/Alcools', [AlcoolsController::class, 'displayAllAlcools'])->name('Alcools');
Route::post('/Alcool/new', [AlcoolsController::class ,'AddAlcool'])->name('newAlcool');

Route::get('/Fruits', [FruitController::class, 'displayAllFruits'])->name('Fruits');
Route::post('/Fruit/new', [FruitController::class ,'AddFruit'])->name('newFruit');

Route::get('/Softs', [SoftController::class, 'displayAllSofts'])->name('Softs');
Route::post('/Soft/new', [SoftController::class ,'AddSoft'])->name('newSoft');

Route::get('/Verres', [VerreController::class, 'displayAllVerres'])->name('Verres');
Route::post('/Verre/new', [VerreController::class ,'AddVerre'])->name('newVerre');
Auth::routes();
// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'App\Http\Controllers\Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'App\Http\Controllers\Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialHandle']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'App\Http\Controllers\Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout'])->name('logout');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
