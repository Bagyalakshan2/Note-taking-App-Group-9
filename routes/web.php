<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index']);       // Show all notes
Route::get('/notes/create', [NoteController::class, 'create']); // Show create note form
Route::post('/notes', [NoteController::class, 'store']); // Store a new note


Route::get('/', function () {
    return view('welcome');
});
