<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('Birth_Doc/birth', function () {
    return view('Birth_Doc/birth');
 });*/


Route::get('Chief_Register',function(){
    return view('Chief_Register');  
})->name('Chief_Register')->middleware('Chief_Register');

Route::get('President_high_Court',function(){
    return view('President_high_Court');  
})->name('President_high_Court')->middleware('President_high_Court');

Route::get('SDO_officier',function(){
    return view('SDO_officier');  
})->name('SDO_officier')->middleware('SDO_officier');

Route::get('Police_Officier',function(){
    return view('Police_Officier');  
})->name('Police_Officier')->middleware('Police_Officier');
