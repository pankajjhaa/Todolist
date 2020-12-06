<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/','App\Http\Controllers\TodoController@index')->name('todo.index');

    Route::get('/todos/create','App\Http\Controllers\TodoController@create');

    Route::patch('/todos/{todo}/update','App\Http\Controllers\TodoController@update')->name('todo.update');

    Route::get('/todos/{todo}/edit','App\Http\Controllers\TodoController@edit');
    Route::get('/todos/{todo}/show','App\Http\Controllers\TodoController@show')->name('todo.show');

    Route::post('/todos/create','App\Http\Controllers\TodoController@store')->name('todo.store');

    Route::put('/todos/{todo}/complete','App\Http\Controllers\TodoController@complete')->name('todo.complete');

    Route::delete('/todos/{todo}/incomplete','App\Http\Controllers\TodoController@incomplete')->name('todo.incomplete');

    Route::delete('/todos/{todo}/delete','App\Http\Controllers\TodoController@delete')->name('todo.delete');
    
    Route::get('/todos/{todo}/pdfview','App\Http\Controllers\TodoController@pdf')->name('pdfview');
});


// Route::get('/dynamic_pdf','App\Http\Controllers\PdfController@index');
// Route::get('/', function () {
//     return view('/todos/index');
// });

// Route::get('/invoice', function () {
//     $pdf = PDF::loadView('invoice');
//     return $pdf->download('invoice.pdf');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
