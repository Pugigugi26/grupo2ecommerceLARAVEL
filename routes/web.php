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
/*--Paginas principales--*/

Route::get('/', "Front\HomeController@home");
Route::get('/faqs', "Front\FaqsController@faqs");
Route::get('/contacto', "Front\ContactController@contact");

/*--FAMILIAS--*/
Route::get('/familias', "FamiliesController@index")->name("families.index");
Route::get('/familias/{id}', "FamiliesController@show")->name("families.show");

/*--MARCOS -*/
Route::get('/marcos', "FramesController@index");

Route::get('/admin', "\Admin\DashboardController@show");
///  Usuarios Login /////
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*-- CREO RECORDAR QUE ACA HAY QUE HACE RUTA DOBLE, DE GET Y POST PERO NO ME ACUERDO ASI QUE LAS DEJO A MEDIO HACER -- Agustina --
Route::get('/admin/familias', function () {return view('pages.admin.families');});
Route::get('/admin/nuevaFamilia', function () {return view('pages.admin.addfamily');});
Route::get('/admin/editarFamilia', function () {return view('pages.admin.editfamilies');});
Route::get('/admin/listarFamilias', function () {return view('pages.admin.families');});
--*/
?>
