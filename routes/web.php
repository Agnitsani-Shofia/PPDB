<?php
//ini adalah keterangantempattinggal
Use App\Http\Controllers\KttController;

//ini adalah controller ppdb
Use App\Http\Controllers\ppdbController;


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

//ini adalah controller ppdb
Route::resource('ppdbs', PpdbController::class);

//ini adalah ktt
Route::resource('ktts', KttController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
