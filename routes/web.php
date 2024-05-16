<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', [app\Http\Controllers\MainController::class, 'index']);
Route::get('/',[MainController::class, 'index']); //Lo hago con mi controlador simplemente para probarlo (Realmente no es necesario en esta web en concreto)

Route::resource("alumnos",AlumnoController::class);
Route::view("about","about");
Route::view("contact","contact");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
