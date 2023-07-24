<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoldersController;
use App\Http\Controllers\FilesController;

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

Route::get('/', function () {
    return view('action.folder');
});
Route::get('folders', function () {
    return view('action.create');
});

Route::resource('folder', FoldersController::class) ;
Route::resource('file', FilesController::class) ;


Route::get('files/create/{folder_id}', 'App\Http\Controllers\FilesController@create')->name('file.create');
Route::get('files/{folder_id}', 'App\Http\Controllers\FilesController@index')->name('file.index');

Route::post('files/{folder_id}', 'App\Http\Controllers\FilesController@store')->name('file.store');



Route::get('files/search/{folder_id}', 'App\Http\Controllers\FilesController@search')->name('file.search');
Route::patch('folders/{folder}', 'App\Http\Controllers\FoldersController@toggleActivation')->name('folder.toggleActivation');



