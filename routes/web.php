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

Route::get('/', "Front\HomeController@home");
Route::get('/faqs', "Front\FaqsController@faqs");
Route::get('/contacto', "Front\ContactController@contact");

/*--FAMILIAS--*/
Route::get('/familias', "FamiliesController@index")->name("families.index");
Route::get('/familias/{id}', "FamiliesController@show")->name("families.show");

/*--MARCOS -*/
Route::get('/marcos', "FramesController@index");

///  Usuarios Login /////
Route::get('/register', "UsersController@register");
Route::post('/register', "UsersController@register");
Route::post('/login', "UsersController@login");
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::get('/login', "UsersController@login");
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

Route::get('/admin', "\Admin\DashboardController@show");

/*-- CREO RECORDAR QUE ACA HAY QUE HACE RUTA DOBLE, DE GET Y POST PERO NO ME ACUERDO ASI QUE LAS DEJO A MEDIO HACER -- Agustina --
Route::get('/admin/familias', function () {return view('pages.admin.families');});
Route::get('/admin/nuevaFamilia', function () {return view('pages.admin.addfamily');});
Route::get('/admin/editarFamilia', function () {return view('pages.admin.editfamilies');});
Route::get('/admin/listarFamilias', function () {return view('pages.admin.families');});
--*/
?>
