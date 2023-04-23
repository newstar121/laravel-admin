<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

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
    return view('welcome1');
});

// Route::get('ingredients', 'InventoryController@ingredients')->name('ingredients');
Route::get('ingredients', [InventoryController::class, 'ingredients']);
Route::get('ingredients', [InventoryController::class, 'ingredients'])->name('ingredients.get');
Route::post('ingredients', [InventoryController::class, 'addIngredient'])->name('ingredients.post');
Route::post('setActive', [InventoryController::class, 'setActive'])->name('setActive.post');