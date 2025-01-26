<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/notes',[NoteController::class,'index']);
Route::get('/note/{id}',[NoteController::class,'note']);

require __DIR__.'/auth.php';
