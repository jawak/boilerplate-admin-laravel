<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('admin/quotes', App\Http\Controllers\admin\QuoteController::class)
    ->names([
        'index' => 'admin.quotes.index',
        'store' => 'admin.quotes.store',
        'show' => 'admin.quotes.show',
        'update' => 'admin.quotes.update',
        'destroy' => 'admin.quotes.destroy',
        'create' => 'admin.quotes.create',
        'edit' => 'admin.quotes.edit'
    ]);