<?php

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

Route::get('/primerruta', function () {
  return 'Creé mi primer ruta en Laravel';
});

Route::get('/resultado/{numero1}', function ($numero1) {
  if ($numero1%2==0) {
    return 'Es número par';
  } else {
    return 'No es número par';
  }
});

Route::get('/resultado2/{numero1}/{numero2?}', function ($numero1, $numero2 = null) {
  if ($numero2 !== null) {
    return $numero1 * $numero2;
  }else{
    if ($numero1%2==0) {
      return 'Es número par';
    } else {
      return 'No es número par';
    }
  }
});

Route::get("/inicio", function () {
    return view("inicio");
});
