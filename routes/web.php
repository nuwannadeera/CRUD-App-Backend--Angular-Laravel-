<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//-------new way of add view//
Route::view('/','welcome');

//----------old way of controller
//Route::get('/updateTask/{id}','taskController@updateTask');

//-----------new way of define controller//
Route::get('students',[\App\Http\Controllers\UsersController::class, 'getStudent']);

Route::post('saveStudent',[\App\Http\Controllers\UsersController::class, 'saveStudents']);

Route::delete('deleteStudent/{id}',[\App\Http\Controllers\UsersController::class, 'deleteStudents']);

Route::get('getOneStudentData/{id}',[\App\Http\Controllers\UsersController::class, 'getOneStudentData']);

Route::patch('updateStudentData/{id}',[\App\Http\Controllers\UsersController::class, 'updateStudentData']);
