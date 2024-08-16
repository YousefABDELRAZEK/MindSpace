<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\GitHubController;
use App\Http\Controllers\Auth\LogoutController;
Route::get('/auth/redirect', [GitHubController::class, 'redirectToGitHub'])->name('github.redirect');
Route::get('/auth/callback', [GitHubController::class, 'handleGitHubCallback'])->name('github.callback');




Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.Home');
    })->name('home');

    Route::get('/mindsketch', function () {
        return view('mindsketch');
    });

    Route::get('/cloudspace', function () {
        return view('pages.Cloud');
    });

    Route::get('/MindspaceCloud', [FileController::class, 'index'])->name('pages.MindspaceCloud');

    Route::post('/files', [FileController::class, 'store'])->name('files.store');
    Route::get('/files/download/{id}', [FileController::class, 'download'])->name('files.download');
    Route::delete('/files/{id}', [FileController::class, 'destroy'])->name('files.destroy');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');