<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AventureController;
use App\Http\Controllers\DestinationViewController;
use App\Http\Controllers\DestViewController;
use App\Http\Controllers\FilterController;
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

Route::get('/', [AventureController::class, "index"]);

Route::get('/addAdv', [DestinationViewController::class, "index"]);

Route::post("/create-aventure", [AventureController::class,"store"]);

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
});

Route::get('/show/{id}', [AventureController::class, 'show'])->name('adventures.show');



Route::get('/filter-aventures', [FilterController::class, 'filterAventures']);