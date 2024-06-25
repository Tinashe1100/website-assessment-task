<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/welcome');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/home-page', 'index');
    Route::get('/edit-home', 'edit');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about-page', 'index');
    Route::get('/edit-about', 'edit');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/services-page', 'index');
    Route::get('/add-service', 'create');
    Route::post('/create-service', 'store');
    Route::get('/edit-service/{service}', 'edit');
    Route::put('/update-service/{service}', 'update');
    Route::delete('/delete-service/{service}', 'destroy');
});
