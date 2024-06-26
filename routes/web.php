<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CallToActionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricePackageItemController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use App\Models\About;
use App\Models\CallToAction;
use App\Models\Home;
use App\Models\PricePackageItem;
use App\Models\Pricing;
use App\Models\Service;
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
    return view('welcome', [
        'landing' => Home::all(),
        'about' => About::all(),
        'services' => Service::all(),
        'packages' => Pricing::all(),
        'package_items' => PricePackageItem::all(),
        'ctas' => CallToAction::all(),
    ]);
});


// Group middleware dashboard routing
Route::middleware('auth')->group(function () {
    // show dashboard
    Route::get('/dashboard', function () {
        return view('dashboard/welcome', [
            'cta' => CallToAction::all(),
        ]);
    });
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/create-account', 'store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/dashboard/home-page', 'index');
    Route::get('/dashboard/edit-home/{home}', 'edit');
    Route::put('/dashboard/update-home/{home}', 'update');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about-page', 'index');
    Route::get('/edit-about', 'edit');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/dashboard/services-page', 'index');
    Route::get('/dashboard/add-service', 'create');
    Route::post('/create-service', 'store');
    Route::get('/edit-service/{service}', 'edit');
    Route::put('/update-service/{service}', 'update');
    Route::delete('/delete-service/{service}', 'destroy');
});

Route::controller(PricingController::class)->group(function () {
    Route::get('/dashboard/pricing', 'index');
    Route::get('/dashboard/add-pricing', 'create');
    Route::get('dashboard/edit-package/{pricing}', 'edit');
    Route::put('/update-package/{pricing}', 'update');
    Route::post('/dashboard/create-package', 'store');
});

Route::controller(PricePackageItemController::class)->group(function () {
    Route::get('/dashboard/package-items', 'index');
    Route::get('/dashboard/add-package-item', 'create');
    Route::post('/dashboard/create-package-item', 'store');
});

Route::controller(CallToActionController::class)->group(function () {
    Route::get('/dashboard/edit-cta/{callToAction}', 'edit');
    Route::put('/dashboard/update-cta/{cta}', 'update');
});
