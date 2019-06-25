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

Route::get('loginprueba', function () {
    return view('auth/loginprueba');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('about', function () {
    return view('docs/about');
});

/* RUTAS DE ACTIVOS*/
Route::get('/activos', 'ActivoController@index')->name('activos');
Route::get('/activos/delete/{activo}', 'ActivoController@destroy')->name('delete');
Route::post('/activos/store', 'ActivoController@store');
Route::get('/json/activos', 'ActivoController@indexApi');

Route::get('/documentation','DocumentationController@show')->name('documentation');

/* RUTAS DE AMENAZAS*/
Route::get('/amenazas', 'AmenazaController@index')->name('amenazas');
Route::get('/amenazas/delete/{amenaza}', 'AmenazaController@destroy')->name('delete');
Route::post('/amenazas/store', 'AmenazaController@store');
Route::get('/json/amenazas', 'AmenazaController@indexApi');
Route::get('/json/amenazasActivos', 'AmenazaController@indexApiActivos');

/* RUTAS DE SALVAVULNERAS*/
Route::get('/salvavulnera', 'SalvavulneraController@index')->name('salvavulnera');
Route::get('/salvavulnera/delete/{salvavulnera}', 'SalvavulneraController@destroy');
Route::post('/salvavulnera/store', 'SalvavulneraController@store');
Route::get('/json/salvavulnera', 'SalvavulneraController@indexApi');
Route::get('/json/salvavulneraAmenaza', 'SalvavulneraController@indexApiAmenazas');

/* RUTAS DE CALCULOS*/
Route::get('/calculo', 'RiesgoController@index')->name('calculo');
Route::post('/calculo/store', 'RiesgoController@store');

/* RUTAS DE ANALISIS*/
Route::get('/analisis', 'RiesgoController@indexAnalisis');
Route::get('/analisis/{indiceR?}', 'RiesgoController@indexAnalisis')->where('indiceR', '[0-9]');
Route::post('/analisis/show', 'RiesgoController@show');

/* RUTAS DE DECISIONES*/
Route::get('/decisiones', 'DecisionController@indexDecisiones');
Route::get('/decisiones/{indiceR?}', 'DecisionController@indexDecisiones')->where('indiceR', '[0-9]');
Route::post('/decisiones/show', 'DecisionController@showDecisiones');
Route::get('/decisiones/delete/{decision}', 'DecisionController@destroy');
Route::post('/decisiones/create', 'DecisionController@create');

/*RUTAS DE DOCUMENTACIÓN*/
Route::get('/documentacion','DocumentationController@index')->name('documentacion');

/*RUTAS DE TOUR*/
Route::get('/tour','TourController@index')->name('tour');
Route::get('/fase1','TourController@fase1');
Route::get('/fase2','TourController@fase2');
Route::get('/fase3','TourController@fase3');
Route::get('/fase4','TourController@fase4');
Route::get('/fase5','TourController@fase5');
Route::get('/fase6','TourController@fase6');
Route::get('/fin','TourController@fin');





//ActivoController::routes();