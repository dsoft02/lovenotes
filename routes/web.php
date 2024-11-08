<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoveNoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/submitnote', [LoveNoteController::class, 'submitNote'])->name('submitnote');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('home');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [AdminController::class, 'updatePassword'])->name('profile.password');

    //Love Notes routes
    Route::get('lovenotes', [AdminController::class, 'dashboard'])->name('lovenotes');
    Route::get('lovenotes/{id}', [AdminController::class, 'showLoveNote'])->name('lovenotes.view');
    Route::get('lovenotes/{id}/export', [AdminController::class, 'exportAsImage'])->name('lovenotes.export');
    Route::delete('lovenotes/{id}', [AdminController::class, 'destroyLoveNote'])->name('lovenotes.destroy');

});

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('applogout');

require __DIR__.'/auth.php';
