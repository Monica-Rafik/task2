<?php

use App\Http\Controllers\ContactController;

Route::prefix('contacts')->group(function () {
   
    Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
  
    Route::get('/{id}', [ContactController::class, 'show'])->name('contacts.show');

    Route::get('/{id}/{name?}', [ContactController::class, 'showByName'])->name('contacts.showByName');

    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');

    Route::post('/', [ContactController::class, 'store'])->name('contacts.store');

    Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

    Route::put('/{id}', [ContactController::class, 'update'])->name('contacts.update');

    Route::delete('/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

