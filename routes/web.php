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

Route::get('/questions', 'QuestionsController@index');
Route::get('/question/{question}', 'QuestionsController@show');
Route::post('/question/{question}/answers', 'AnswersController@store');
