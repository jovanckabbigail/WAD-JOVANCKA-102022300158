<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/', [MenuController::class, 'welcome'])->name('welcome');   