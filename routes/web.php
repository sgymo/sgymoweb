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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrarse', function () {
    return view('sign-up');
});


Route::get('/inicio', function () {
    return view('dashboard');
});


Route::get('/crearUsuarios', function () {
    return view('create-users-dashboard');
});

Route::get('/listarUsuarios', function () {
    return view('list-users-dashboard');
});

Route::get('/movimientos', function () {
    return view('movements-dashboard');
});

Route::get('/verMovimientos', function () {
    return view('see-movements-dashboard');
});

Route::get('/configuraciones', function () {
    return view('configurations');
});