<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/cadastrar', function () {
    return view('cadastrar');
})->middleware(['auth', 'verified'])->name('cadastrar');

Route::get('/listar', [ClienteController::class, 'queries'])->middleware(['auth', 'verified'])->name('listar');

 

Route::get('/editar/{id}', [ClienteController::class, 'edit'])->middleware(['auth', 'verified']);



Route::get('/ver/{id}',[ClienteController::class, 'show'])->middleware(['auth', 'verified']);


Route::post('/agendamento/novo',[ClienteController::class, 'store'])->name('registrar_clientes')->middleware(['auth', 'verified']);




Route::post('/atualizar/{id}', [ClienteController::class, 'update'])->middleware(['auth', 'verified']);


Route::get('/excluir/{id}', [ClienteController::class, 'delete'])->middleware(['auth', 'verified']);

Route::post('/excluir/{id}', [ClienteController::class, 'destroy'])->middleware(['auth', 'verified'])->name('excluir_clientes'); 



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
