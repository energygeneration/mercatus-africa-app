<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\NewsletterController;

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



Route::get('/category/search', function () {
    return view('annonce.search_annonce');
});

Route::get('/form/blog', function () {
    return view('blog.blog-form');
})->name('form.blog');

Route::get('/blog', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/contenu/{id}', [BlogController::class, 'article'])->name('blog.article');

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/show/annonce/{id}', [AppController::class, 'show'])->name('show.annonce');

Auth::routes();


Route::get('/delete/confirm/{id}', [HomeController::class, 'delete'])->name('delete.annonce');


Route::get('/add/annonce', [HomeController::class, 'add'])->name('add.annonce');
Route::get('/edit/annonce/{id}', [HomeController::class, 'edit'])->name('edit.annonce');
Route::post('/create/annonce', [AnnonceController::class, 'create'])->name('create.annonce');
Route::put('/update/annonce/{id}', [AnnonceController::class, 'update'])->name('update.annonce');
Route::delete('/delete/annonce/{id}', [AnnonceController::class, 'destroy'])->name('destroy.annonce');

/*
|--------------------------------------------------------------------------
| Route pour la Newsletter
|--------------------------------------------------------------------------
*/

Route::post('/newsletter/create', [NewsletterController::class, 'create_newsletter'])->name('newsletter.create');
Route::get('/newsletter', [NewsletterController::class, 'show'])->name('newsletter.show');
/*
|--------------------------------------------------------------------------
| Route pour la recherche
|--------------------------------------------------------------------------
*/

Route::get('/favoris', [HomeController::class, 'favoris'])->name('favoris');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/myAnnonce', [HomeController::class, 'myAnnonce'])->name('myAnnonce');

/*
|--------------------------------------------------------------------------
| Route pour la recherche
|--------------------------------------------------------------------------
*/

Route::get('/search', [AppController::class, 'search'])->name('search');

Route::get('/category/Immobilier', [AppController::class, 'search_Immobilier'])->name('search_Immobilier');
Route::get('/category/Electronique', [AppController::class, 'search_Electronique'])->name('search_Electronique');
Route::get('/category/Véhicule', [AppController::class, 'search_Véhicule'])->name('search_Véhicule');
Route::get('/category/Mode', [AppController::class, 'search_Mode'])->name('search_Mode');
Route::get('/category/Pour_la_maison', [AppController::class, 'search_Pour_la_maison'])->name('search_Pour_la_maison');
Route::get('/category/Education', [AppController::class, 'search_Education'])->name('search_Education');
Route::get('/category/Emploi', [AppController::class, 'search_Emploi'])->name('search_Emploi');
Route::get('/category/Services', [AppController::class, 'search_Services'])->name('search_Services');
Route::get('/category/Loisirs', [AppController::class, 'search_Loisirs'])->name('search_Loisirs');
Route::get('/category/Autres', [AppController::class, 'search_Autres'])->name('search_Autres');

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/list/annonce', [HomeController::class, 'adminHome'])->name('admin.home');

Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('/edit/blog/{id}', [BlogController::class, 'edit_blog'])->name('edit.blog');
Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('update.blog');
Route::delete('/delete/blog/{id}', [BlogController::class, 'destroy'])->name('destroy.blog');
Route::get('/blog/dashboard', [BlogController::class, 'blog_dashboard'])->name('blog_dashboard');
Route::get('/blog/delete/confirm/{id}', [BlogController::class, 'delete_blog'])->name('delete.blog');
});
