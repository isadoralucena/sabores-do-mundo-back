<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserRecipes;

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

Route::get('/', [RecipeController::class, 'index']);
Route::get('/search', [RecipeController::class, 'search'])->name('search');
Route::get('/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::post('/create', [RecipeController::class, 'store'])->name('recipe.store');

Route::get('/dashboard', [RecipeController::class, 'dashboard'])->name('dashboard');
Route::get('/show/{id}', [RecipeController::class, 'show'])->name('show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/myRecipes', [UserRecipes::class, 'index'])->name('userRecipes');
    Route::get('/myRecipes/editar/{id}', [UserRecipes::class, 'edit'])->name('editRecipe');
    Route::post('/myRecipes/editar', [UserRecipes::class, 'update'])->name('updateRecipe');
});

require __DIR__.'/auth.php';
