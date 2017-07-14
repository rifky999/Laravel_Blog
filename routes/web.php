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

//Route::get('/', function () {  return view('welcome');});

Route::get('/','ArticleController@blog')->name('home');
Route::get('dasboard','ArticleController@dasboard')->name('dasboard');
Route::get('RR',['uses'=>'KontrolUser@index']);
/*
Route::get('R_99', function(){
 $Rifky = ['0'=>[
                  'Hobi' => 'Learning',
                  'Hobi2' => 'Coding',
                  'Hobi3' => 'Speaking'
                ],
           '1'=>[
                  'Ahli' => 'WebDev',
                  'Ahli2' => 'AndDev',
                  'Ahli3' => 'NativeProgram'
                ]

          ];

    return $Rifky;
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
