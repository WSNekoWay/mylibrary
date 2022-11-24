<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;
use App\Models\Writer;


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


Route::resource('books', BookController::class)->middleware('admin');
Route::get('/', [WriterController::class, 'index']);
Route::get('/index', [WriterController::class, 'index']);
Route::get('/writer/{writer}', [WriterController::class, 'show']);
Route::get('/admin', function(){
        return view('admin/index',[
            'pagetitle'=> 'Admin'
        ]);
})->middleware(['admin']);
Route::get('/about', [WriterController::class, 'about']);
Route::get('/contact', [WriterController::class, 'contact']);


require __DIR__.'/auth.php';
