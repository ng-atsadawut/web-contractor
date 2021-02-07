<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', 'HomeController@demo');

Route::get('/home', function () {
    return view('home');
});

Route::get('/learn', function () {
    return view('learn');
});


Route::get('/ohh', [HomeController::class, 'demo']);

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [ContactController::class, 'getContract']);
Route::post('/contact', [ContactController::class, 'postContract']);
