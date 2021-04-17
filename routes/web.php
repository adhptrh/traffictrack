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

Route::get('/',"LoginController@index");
Route::get('/login',"LoginController@index");
Route::get('/login-admin',"LoginController@indexAdmin")->name("login-admin");
Route::get('/register',"RegisterController@index");
Route::post('/do-register',"RegisterController@register");
Route::post('/do-login',"LoginController@login");
Route::post('/do-login-admin',"LoginController@loginAdmin");
Route::get('/home',"HomeController@index")->name("home");
Route::get('/laporan',"LaporanController@index")->name("laporan");
Route::get('/riwayatlaporan',"LaporanController@riwayatLaporan")->name("riwayatlaporan");
Route::get('/feedback',"FeedbackController@index")->name("feedback");
Route::get('/listperempatan',"ListPerempatanController@index")->name("listperempatan");
Route::get('/logout',"HomeController@logout");
Route::get('/chat',"HomeController@chat")->name("chat");
Route::get('/kelolaperempatan',"ListPerempatanController@kelolaPerempatan")->name("kelolaperempatan");
Route::get('/kelolapolantas',"PolantasController@kelolaPolantas")->name("kelolapolantas");
Route::get('/tambahperempatanform',"ListPerempatanController@tambahPerempatanForm")->name("tambahperempatanform");
Route::get("/tambahpolantasform","PolantasController@tambahPolantasForm")->name("tambahpolantasform");
Route::get('/editperempatanform/{id}',"ListPerempatanController@editPerempatanForm")->name("editperempatanform");
Route::get('/editpolantas/{id}',"PolantasController@editPolantasForm")->name("editpolantasform");
Route::post("/kirimlaporan","LaporanController@kirimLaporan")->name("kirimlaporan");
Route::post("/kirimfeedback","FeedbackController@kirimFeedback")->name("kirimfeedback");
Route::post("/tambahperempatan","ListPerempatanController@tambahPerempatan")->name("tambahperempatan");
Route::post("/tambahpolantas","PolantasController@tambahPolantas")->name("tambahpolantas");
Route::post("/editperempatan","ListPerempatanController@editPerempatan")->name("editperempatan");
Route::post("/editpolantas","PolantasController@editPolantas")->name("editpolantas");
Route::get("/deleteperempatan/{id}","ListPerempatanController@deletePerempatan")->name("deleteperempatan");
Route::get("/deletepolantas/{id}","PolantasController@deletePolantas")->name("deletepolantas");