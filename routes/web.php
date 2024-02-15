<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
// use App\Http\Controllers\MainController;

Route::get('/', [ComicController :: class, 'index']) -> name('comics.index');
Route::get('/comic/create', [ComicController :: class, 'create']) -> name('comics.create');
Route::post('/comic', [ComicController :: class, 'store']) -> name('comics.store');

Route::get('/comic/{id}', [ComicController :: class, 'show']) -> name('comics.show');