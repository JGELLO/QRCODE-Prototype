<?php

use App\Http\Controllers\QRController;
use App\Http\Controllers\ListsController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
    return View::make('first.home');
});
Route::get('/', function () {
    return view('first.layout');
});
Route::get('/homes', function () {
    return view('first.home');
});
Route::get('/cr', function () {
    return view('first.create');
});

Route::get('/sets', function () {
    return view('first.settings');
});

Route::get('/ind', function () {
    return view('first.index');
});

Route::get('/inder', [ListsController::class, 'index']);
Route::get('/inde', [ListsController::class, 'index2']);
Route::resource('lists', ListsController::class);

/*
 QRCODE ROUTES
*/

Route::get('/qwe', function () {
    return view('first.qrcode');
});

Route::get('/qwee', function () {
    return view('first.qrcode2');
});

Route::get('/qrt', function () {
    return view('first.qrcode');
});

Route::resource('qr', QRController::class);