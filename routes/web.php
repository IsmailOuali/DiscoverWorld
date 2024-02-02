<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvInsertController;
use App\Http\Controllers\DestinationViewController;
use App\Http\Controllers\DestViewController;
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

Route::get('/addAdv', [DestinationViewController::class, "index"]);

// Route::get('insert', [AdvInsertController::class, "insertform"]);
Route::post('create', [AdvInsertController::class, "insert"]);
// [AdvInsertController::class, "insert"]
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});