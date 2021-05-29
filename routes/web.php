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
Route::get('/lesson', function () {return view('home');});
#レッスンの登録
Route::post('/lesson', function () {return view('home');});
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
