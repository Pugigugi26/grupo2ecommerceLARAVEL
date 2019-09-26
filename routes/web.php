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

borrar luego de tener las rutas definidas!

Rutas para usuarios? a definir!
tener en cuenta!
get- pedir informacion
post- enviar informacion
put- actualizar por completo un dato existente
patch -actualizar informacion
delete -eliminar informacion


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

/*http: midominio.com/index*/

/*--Paginas principales--*/
<<<<<<< HEAD

Route::get('/index', "PagesController@home");
Route::get('/faqs', "PagesController@faqs");
Route::get('/contacto', "PagesController@contact");
Route::get('/familias', "FamiliesController@index");
Route::get('/login', "PagesController@login");
Route::get('/registro', "PagesController@register");
Route::get('/admin', "PagesController@admin");
=======
Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('pages.home');});
Route::get('/faqs', function () {return view('pages.faqs');});
Route::get('/contacto', function () {return view('pages.contact');});
Route::get('/familias', function () {return view('pages.families');});
Route::get('/login', function () {return view('pages.login');});
Route::get('/registro', function () {return view('pages.register');});
Route::get('/admin', function () {return view('pages.admin.adminHome');});
>>>>>>> ae5896087277fbd43ddd1902a53e4515493019d5

/*--Panel y paginas de Admin--*/


/*-- CREO RECORDAR QUE ACA HAY QUE HACE RUTA DOBLE, DE GET Y POST PERO NO ME ACUERDO ASI QUE LAS DEJO A MEDIO HACER -- Agustina --
Route::get('/admin/familias', function () {return view('pages.admin.families');});
Route::get('/admin/nuevaFamilia', function () {return view('pages.admin.addfamily');});
Route::get('/admin/editarFamilia', function () {return view('pages.admin.editfamilies');});
Route::get('/admin/listarFamilias', function () {return view('pages.admin.families');});
--*/
