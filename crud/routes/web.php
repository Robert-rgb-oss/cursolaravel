<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controller\PostController;

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');

Route::resource('/post', PostController::class);

/**
 * C = create
 * R = read
 * U = update
 * D = delete
 */