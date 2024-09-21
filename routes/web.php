<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

Route::get('/',[EventosController::class,'MostrarHome'])->name('home-adm');

Route::get('/cadastro-evento',[EventosController::class, 'MostrarCadastroEvento'])->name('show-cadastro-evento');

Route::get('/lista-evento',[EventosController::class, 'MostrarEventoNome'])->name('lista-evento');

Route::get('/altera-evento',[EventosController::class, 'MostrarEventoCodigo'])->name('show-altera-evento');

//cadastrar
Route::post('/cadastro-evento',[EventosController::class,'CadastrarEventos'])->name('cadastra-evento');

//delete
Route::delete('/apaga-evento',[EventosController::class,'Destroy'])->name('apaga-evento');

//alterar
Route::put('/altera-evento',[EventosController::class,'Update'])->name('altera-evento');