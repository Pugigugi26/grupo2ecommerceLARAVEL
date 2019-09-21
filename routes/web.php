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
Rutas para usuarios? a definir!
http: midominio.com/index
http: midominio.com/faqs
http: midominio.com/productos/{producto}
http: midominio.com/familia/{familia}
http: midominio.com/reqistro
http: midominio.com/Login
http: midominio.com/LoginAdministrador
http: midominio.com/AgregarProductos
http: midominio.com/Carrito

*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::post('/register', function () {

});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {

});
