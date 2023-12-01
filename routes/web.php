<?php

use Illuminate\Support\Facades\Route;

//-------old way of adding view

//Route::get('/', function () {
//    return view('welcome');
//});

//-------new way of add view//
Route::view('/','welcome');

//----------old way of controller
//Route::get('/updateTask/{id}','taskController@updateTask');

//-----------new way of define controller//
Route::get('students',[\App\Http\Controllers\UsersController::class, 'getAllStudents']);

Route::post('saveStudent',[\App\Http\Controllers\UsersController::class, 'saveStudents']);

Route::delete('deleteStudent/{id}',[\App\Http\Controllers\UsersController::class, 'deleteStudents']);

Route::get('getOneStudentData/{id}',[\App\Http\Controllers\UsersController::class, 'getOneStudentData']);

Route::patch('updateStudentData/{id}',[\App\Http\Controllers\UsersController::class, 'updateStudentData']);
