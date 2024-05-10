<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\RegisterController;
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

Route::group(['middleware' => 'web'], function () {
    Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/', function () {
    return view('pages/home');
})->name('home');
Route::get('/catalog', function () {
    return view('pages/catalog');
})->name('catalog');
Route::get('/production', function () {
    return view('pages/production');
})->name('production');
Route::get('/contacts', function () {
    return view('pages/contacts');
})->name('contacts');
Route::get('/portfolio', function () {
    return view('pages/portfolio');
})->name('portfolio');
Route::get('/purchase', function () {
    return view('pages/purchase');
})->name('purchase');
Route::get('/posts', function () {
    return view('pages/posts');
});
Route::get('/calculate', function () {
    return view('pages/calculate');
})->name('calculate');
Route::post('/', [CalculateController::class, 'index']);

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

Route::post('/order/store', [SettingsController::class, 'store'])->name('order.store');
