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
    return view('nuevo');
});

 Route::get('sis', 'SisController@index');
 Route::post('sis/create', 'SisController@save');

 Route::get('test', function() {


 return Response::download('Derecho de peticion.docx');

});