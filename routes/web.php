<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/sobre', [HomeController::class, 'sobrenos'])->name('sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');
Route::get('/cursos', [HomeController::class, 'cursos'])->name('cursos');
Route::get('/departamentos', [HomeController::class, 'departamentos'])->name('departamentos');

// Rota fallback
Route::fallback(function () {
    echo "A rota acessada não existe. <a href='" . route('home') . "'>Clique aqui</a> para ir para a página inicial.";
});