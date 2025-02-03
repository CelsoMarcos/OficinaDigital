<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViaturaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\ProfileController; // Adicione esta linha

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

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota para o dashboard (área restrita)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas de perfil do usuário (área restrita)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotas para o CRUD de viaturas
Route::resource('viaturas', ViaturaController::class)->middleware('auth');

// Rotas para o CRUD de serviços
Route::resource('servicos', ServicoController::class)->middleware('auth');

// Rota para relatórios
Route::get('/relatorios', [RelatorioController::class, 'index'])->middleware('auth');

// Rotas para administradores
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Rotas para secretários
Route::middleware(['auth', 'role:secretario'])->group(function () {
    Route::get('/secretario/dashboard', function () {
        return view('secretario.dashboard');
    })->name('secretario.dashboard');
});

// Rotas para técnicos
Route::middleware(['auth', 'role:tecnico'])->group(function () {
    Route::get('/tecnico/dashboard', function () {
        return view('tecnico.dashboard');
    })->name('tecnico.dashboard');
});

// Rotas para clientes
Route::middleware(['auth', 'role:cliente'])->group(function () {
    Route::get('/cliente/dashboard', function () {
        return view('cliente.dashboard');
    })->name('cliente.dashboard');
});

// Rotas para gerentes
Route::middleware(['auth', 'role:gerente'])->group(function () {
    Route::get('/gerente/dashboard', function () {
        return view('gerente.dashboard');
    })->name('gerente.dashboard');
});

// Inclui as rotas de autenticação geradas pelo Breeze
require __DIR__.'/auth.php';