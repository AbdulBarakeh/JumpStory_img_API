<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FilesController;
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

Route::get('/', [PagesController::class,'index']);

// Route::get('/index', [PagesController::class,'index']);

// Route::get('/index', function () {
//     return view('pages.index');
// });

Route::get('/about', [PagesController::class,'about']);
Route::get('/upload', [PagesController::class,'upload']);

Route::post('fileupload', [FilesController::class,'upload'])->name('file.upload');

// Route::post('file/upload', 'FileController@store')->name('file.upload');