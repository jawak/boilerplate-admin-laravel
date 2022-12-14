<?php

use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});



