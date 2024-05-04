<?php

use App\Http\Controllers\ClientCommentController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [Controller::class, 'index'])->name('main');

// set Locales
Route::get('/lenguage/{locale}', [Controller::class, 'setLocale'])->name('set.locale');

// client
Route::resource('clients', ClientController::class);

// comment
Route::resource('comments', ClientCommentController::class);

// main pages route for showing all clients
Route::get('/{route}', [RouteController::class, 'route'])->name('route');


Route::get('/staff/index', [StaffController::class, 'index']);
// staff create 
Route::get('/staff/create', [StaffController::class, 'create']);
// staff store
Route::post('/staff/store', [StaffController::class,'store'])->name('staff.store');


Route::get('/rooms', [RoomTypeController::class, 'index']);



