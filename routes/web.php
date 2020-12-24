<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RamenController;
use App\Http\Controllers\ItemController;

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

Route::get('/', [RamenController::class, 'welcome'])->name('welcome');

Route::get('/ramen', [RamenController::class, 'index'])->name('ramen.index')->middleware('auth');
Route::get('/ramen/all', [RamenController::class, 'history'])->name('ramen.history')->middleware('auth');
Route::post('/ramen', [RamenController::class, 'store'])->name('ramen.store');
Route::post('/completed/{orderId}', [RamenController::class, 'update'])->name('ramen.completed');
Route::get('/ramen/create', [RamenController::class, 'create'])->name('ramen.create');
Route::get('/ramen/details', [RamenController::class, 'details'])->name('ramen.details');
Route::get('/item', [ItemController::class, 'index'])->name('item.index')->middleware('auth');
Route::post('/item', [ItemController::class, 'store'])->name('item.store')->middleware('auth');
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create')->middleware('auth');
Route::delete('/item/{itemId}', [ItemController::class, 'destroy'])->name('item.destroy')->middleware('auth');
Route::get('/ramen/{orderId}', [RamenController::class, 'show'])->name('ramen.show')->middleware('auth');
Route::get('/ramen/{orderId}/bill', [RamenController::class, 'bill'])->name('ramen.bill')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
