<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscricaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CursoController;
use App\Http\Middleware\CursoMiddleware;

// Rota para exibir a homePage
Route::get('/', [HomeController::class, 'index']);

// Rota para exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('usuarios.login');

// Rota para processar o login
Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login');

// Rota para exibir o formulário de registro
Route::get('/registro', [UsuarioController::class, 'showRegistroForm'])->name('usuarios.registro');

// Rota para processar o registro
Route::post('/registro', [UsuarioController::class, 'registro'])->name('usuarios.registro');

// Rota para logout
Route::post('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');

// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Rota para os cursos, protegida por CursoMiddleware
Route::resource('/cursos', CursoController::class)->middleware(CursoMiddleware::class); 

// Rota para exibir um curso específico
Route::get('/cursos/{curso}', [CursoController::class, 'show'])->middleware('auth')->name('cursos.show');

// Rota para adicionar inscrição a um curso
Route::post('/inscricao/add/{curso}', [InscricaoController::class, 'add'])->middleware('auth')->name('inscricao.add');

// Rota para cancelar a inscrição de um curso
Route::delete('/inscricao/cancel/{curso}', [InscricaoController::class, 'cancel'])->middleware('auth')->name('inscricao.cancel');

Route::get('/exibir-tudo', [CursoController::class, 'exibirTodos'])->name('cursos.exibir-tudo');
