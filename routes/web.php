<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;

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

Route::get('/', FrontController::class.'@index')->name('front.index');

Route::get('/herramientas', FrontController::class.'@tools')->name('front.tools');

Route::get('/de-que-operador-es-un-numero', FrontController::class.'@operator')->name('tools.operator');
Route::post('/de-que-operador-es-un-numero', FrontController::class.'@operatorSearch')
    ->middleware('auth')
    ->name('tools.operator.search');


Route::get('/politica-privacidad', FrontController::class.'@policy')->name('policy.privacy');
Route::get('/politica-cookies', FrontController::class.'@cookies')->name('policy.cookies');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/twint' , function(){
        return view('twint');
    })->name('twint');
});

require __DIR__.'/auth.php';
