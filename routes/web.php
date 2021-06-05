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

#レッスンの一覧が見れる
Route::get('/', 'LessonController@index');


#日のスケジュール
Route::get('/date/{date}', 'LessonController@list');



#レッスンの登録
Route::get('/lesson/create', 'LessonController@create');
Route::post('/lesson/create', 'LessonController@store');
#レッスンの詳細
Route::get('/lesson/{id}', function () {return view('home');});
#レッスンの編集
Route::post('/lesson/{id}', function () {return view('home');});

#課題の一覧
Route::get('/lesson/{id}/task', function () {return view('home');});
#課題の登録
Route::post('/lesson/{id}/task', function () {return view('home');});
#課題の詳細
Route::post('/lesson/{id}/task/{task_id}', function () {return view('home');});
#課題の編集
Route::post('/lesson/{id}/task/{task_id}', function () {return view('home');});


#チャット
Route::get('/lesson/{id}/chat', function () {return view('home');});
#チャットの登録
Route::post('/lesson/{id}/chat', function () {return view('home');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


