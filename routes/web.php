<?php

use App\Http\Controllers\VoteCastingController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/vote/cating', [VoteCastingController::class, 'index'])->name('vote.casting');
Route::get('/votes/{vote}', [VoteCastingController::class, 'show'])->name('vote.show');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';