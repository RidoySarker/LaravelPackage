<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Ridoy\Student\Http\Controllers'], function () {
    Route::get('student', 'StudentController@index');
    Route::post('student', 'StudentController@store')->name('student');
    Route::delete('student/{id}', 'StudentController@destroy')->name('student.destroy');
});
