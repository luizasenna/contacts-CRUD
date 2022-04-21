<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

/*Route::get('/', function () {
    return view('index');
});*/

  Route::get('/', [ContactsController::class, 'home']);
  Route::group(['prefix' => 'contact'], function () {
      Route::get('/show/{id}', [ContactsController::class, 'show']);
      Route::get('/add', function () {
          return view('contacts/add');
      });
      Route::get('/edit/{id}', [ContactsController::class, 'edit']);
      Route::get('/delete/{id}', [ContactsController::class, 'delete'])->name('delete');


      Route::post('/create', [ContactsController::class, 'create'])->name('createNew');
      Route::post('/update', [ContactsController::class, 'update'])->name('update');
  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
