<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatGPTController;
use App\Http\Controllers\ClaudeController;


Route::get('/chat',[ChatGPTController::class,"index"])->name("view_chat");
Route::post('/get-chat',[ChatGPTController::class,"ask"])->name("get_chat");
Route::get("/claude", [ClaudeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
