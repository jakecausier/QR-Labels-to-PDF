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
    return view('home');
});

/* Route to the labels preview page */
Route::get('labels', 'LabelsController@generateLabels')->name('labels');


/* Route to the label generator */
Route::get('label-generate', 'LabelsController@generatePDF')->name('labels.generate');
