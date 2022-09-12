<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnonceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/show/annonce/{id}', [AppController::class, 'show'])->name('show.annonce');


Auth::routes();

Route::get('/modifier', [HomeController::class, 'modifier'])->name('modifier');
Route::get('/delete/confirm/{id}', [HomeController::class, 'delete'])->name('delete.annonce');

Route::get('/favoris', [HomeController::class, 'favoris'])->name('favoris');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/add/annonce', [HomeController::class, 'add'])->name('add.annonce');
Route::get('/edit/annonce/{id}', [HomeController::class, 'edit'])->name('edit.annonce');
Route::post('/create/annonce', [AnnonceController::class, 'create'])->name('create.annonce');
Route::put('/update/annonce/{id}', [AnnonceController::class, 'update'])->name('update.annonce');
Route::delete('/delete/annonce/{id}', [AnnonceController::class, 'destroy'])->name('destroy.annonce');
// Route::delete('/destroy/annonce/{id}', [AnnonceController::class, 'destroy'])->name('destroy.annonce');

// Route::delete('users/{id}', function ($id) {

//     return redirect()->route('destroy.annonce');
// });

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
// Route::middleware(['auth', 'user-access:user'])->group(function () {


// });
// Route::get('/home', [HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
