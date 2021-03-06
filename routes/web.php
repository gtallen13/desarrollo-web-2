<?php

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


// Route::get('/',function(){
//     $nombre = "John Wick";
//     return view('home')->with('nombre',$nombre);
// })->name('home');

$portafolio = [
    ['title'=>'Hi'],
    ['title'=>'Hola'],
    ['title'=>'Salut'],
    ['title'=>'GG'],
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portafolio', 'PortController',compact('portafolio'))->name('portafolio');
Route::view('/contactos', 'contactos')->name('contactos');