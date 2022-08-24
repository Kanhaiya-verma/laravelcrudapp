<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataBaseController;
use App\Http\Controllers\addController;

Route::get('/', [dataBaseController::class, 'DatabaseShow'])->name('home');
Route::get('add', [dataBaseController::class, 'showAddData'])->name('add');
Route::post('save', [dataBaseController::class, 'saveData'])->name('saveData');
Route::get('/delete/{id}', [dataBaseController::class, 'deleteData'])->name('deleteData');
Route::get('/edit/{id}', [dataBaseController::class, 'editData'])->name('editData');
