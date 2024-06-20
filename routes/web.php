<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use GrahamCampbell\Markdown\Facades\Markdown;
use Parsed\Content;
use Parsed\ContentParser;

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
    return view('welcome');
});


Route::get('/mdma', function () {
    $articles = [];

    foreach (glob(storage_path('../public/articlesMDMA') . '/*.md') as $file) {
        $article = new Content(file_get_contents($file));
        $article->parse(new ContentParser());
        $articles[] = $article;
    }
    return view('mdma', [
        'articles' => $articles
    ]);
});

Route::get('/ndi', function () {
    $articles = [];

    foreach (glob(storage_path('../public/articlesNDI') . '/*.md') as $file) {
        $article = new Content(file_get_contents($file));
        $article->parse(new ContentParser());
        $articles[] = $article;
    }

    return view('ndi', [
        'articles' => $articles
    ]);
});


Route::view('/chisiamo', 'chisiamo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
