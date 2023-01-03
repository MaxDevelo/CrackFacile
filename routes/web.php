<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\SoftwareController;

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

/* ------------------------------------------------------------------------
| Public routing */

Route::get('/', [UserController::class, 'home']);
Route::get('home', [UserController::class, 'home'])->name('home');
Route::get('faq', [UserController::class, 'faq'])->name('faq');
Route::get('instructions', [UserController::class, 'instructions'])->name('instructions');
Route::get('listgames', [UserController::class, 'listgames'])->name('listgames');
Route::get('listsoftwares', [UserController::class, 'listsoftwares'])->name('listsoftwares');
Route::get('showsoftware/{slug}', [SoftwareController::class, 'showsoftware'])->name('showsoftware');

Route::prefix('')->middleware('exist.game')->group(function () {

	Route::get('showgame/{slug}', [GameController::class, 'showgame'])->name('showgame');
});
// ------------------------------------------------------------------------

/* ------------------------------------------------------------------------
| Admin routing */
// Route::prefix('admin')->middleware('auth.myuser')->group( function() {


// });
// ------------------------------------------------------------------------
