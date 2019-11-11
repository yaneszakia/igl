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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes(['verify'=>true]);

//Route::get('/home', 'HomeController@index')->name('home');


/*------------------la page index --------------*/
Route::get('/', function () { return view('Index'); });

/*--------------------------------------------------*/
//la page qu'obtient le prof apres le choix de l'index
Route::get('/choix_prof',function(){ return view('choix_prof'); });

/*--------------------------------------------------*/
 //la page qu'obtient l'etudiant apres le choix de l'index
Route::get('/choix_etud',function(){ return view('choix_etudiant'); });
Route::get('/ajoutplan','PlanningController@index');
Route::Post('/addplan','PlanningController@store')->name('addplan');

