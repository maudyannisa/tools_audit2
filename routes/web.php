<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

	get : menampilkan halaman
	resource : deklarasi CRUD yg ada --resource
	post : buat masukin data ke database
	patch : edit
	
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index');

//======== Perusahaan
Route::get('perusahaan/search', 'PerusahaanController@search');
Route::resource('perusahaan', 'PerusahaanController');
Route::patch('perusahaan/{perusahaan}/restore', 'PerusahaanController@restore');

//======== Auditee
Route::get('perusahaan/{perusahaan}/auditee/search', 'AuditeeController@search');
Route::resource('perusahaan.auditee', 'AuditeeController');
Route::patch('perusahaan/{perusahaan}/auditee/{auditee}/restore', 'AuditeeController@restore');

//======== Proses Audit
Route::get('proses_audit', 'Proses_AuditController@index');
Route::post('proses_audit', 'Proses_AuditController@submit');
Route::resource('proses_audit', 'Proses_AuditController');
Route::patch('proses_audit/{proses_audit}/restore', 'AuditeeController@restore');

//======== Ajax
Route::get('ajax_auditee/{id}', 'Proses_AuditController@ajax_auditee');
Route::get('ajax_subdomain/{id}', 'Proses_AuditController@ajax_subdomain');

;

//======== Evidance
Route::get('evidance', 'EvidanceController@index');
Route::post('proses_audit', 'EvidanceController@submit');
Route::resource('evidance', 'EvidanceController');

//======== Report
Route::get('report', 'ReportController@index');
Route::post('report', 'ReportController@submit');
Route::resource('report', 'ReportController');


