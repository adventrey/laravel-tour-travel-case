<?php

use App\Http\Controllers\Admin\DashboardController;
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


Route::get('/','HomeController@index') 
->name('home');

Route::get('/detail','DetailController@index') 
->name('detail');

Route::get('/check','CheckController@index') 
->name('check');

Route::get('/check/success','CheckController@success') 
->name('check-success');

Route::get('/checkout','CheckoutController@index') 
->name('checkout');





route::prefix('admin')
    ->namespace('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        route::get('/','DashboardController@index')
        ->name('dashboard');
        
    });

    Auth::routes();


