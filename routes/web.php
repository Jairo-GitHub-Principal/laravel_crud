<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BookController;
 


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
// rota atrav�s de um fun��o

/*Route::get('/', function  () {
    return view('index');
});*/

// rota direta atrav�s de um controller
Route::get('/','BookController@index');
