<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/overmij', [PostController::class, 'aboutMe'])->name('posts.overmij');
Route::get('/contact', [ContactController::class, 'show'])->name('posts.contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/projecten/index', [ProjectController::class, 'index'])->name('projecten.index');
Route::get('/projecten/create', [ProjectController::class, 'create'])->name('projecten.create');
Route::post('/projecten/store', [ProjectController::class, 'store'])->name('projecten.store');
Route::get('/projecten/{post}/edit', [ProjectController::class, 'edit'])->name('projecten.edit');
Route::put('/projecten/{post}/update', [ProjectController::class, 'update'])->name('projecten.update');
Route::get('/projecten/{post}/edit', [ProjectController::class, 'edit'])->name('projecten.edit');
Route::delete('/projecten/{post}', [ProjectController::class, 'destroy'])->name('posts.destroy');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
