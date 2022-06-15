<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SQLController;

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

Route::get('/js_projects', function () {
    return view('js_projects');
});

Route::get('/sql_page', function () {
    return view('sql_page');
});

Route::get('/theory', function () {
    return view('theory');
});

Route::get('/getStudents', [SQLController::class,'getStudents']);
Route::get('/getClasses', [SQLController::class,'getClasses']);
Route::get('/getTeachers', [SQLController::class,'getTeachers']);