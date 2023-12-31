<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\birthController;
use App\Http\Controllers\IdController;

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

// route for birth certificate
Route::get('/Birth_Doc/birth', function () {
    return Birth_Doc('/Birth_Doc/birth');
 });

 Route::get('/Birth_Doc/birth', [BirthController::class, 'showForm'])->name('birthCertificateForm');
 Route::post('/Birth_Doc/birth', [BirthController::class, 'store'])->name('storeBirthCertificate');


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

 
// route for id card
Route::get('/Id_card/national_id', function () {
    return Id_card('/Id_card/national_id');
 });

Route::get('/Id_card/national_id', [IdController::class, 'showForm'])->name('idCardForm');
Route::post('/Id_card/national_id', [IdController::class, 'store'])->name('storeIdCard');

// route for about contact us

Route::get('/contact_us/contact_us', function () {
    return contact_us('/contact_us/contact_us');
 });

 // route for about us
 
 Route::get('/contact_us/about_us', function () {
    return contact_us('/contact_us/about_us');
 });
