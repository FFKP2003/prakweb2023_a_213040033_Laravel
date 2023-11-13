<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

use App\Models\Category;

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
    return view('home', [
        "tittle" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Faqih Firdaus Kemal Pangestu",
        "email" => "FaqihFirdaus@gmail.com",
        "gambar" => "hiiqaff.jpg"
    ]);
});

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'tittle' => 'Blog categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'tittle' => $category->name,
        'blogs' => $category->blogs,
        'category' => $category->name
    ]);
});

