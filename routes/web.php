<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;



Route::get('/',[EventosController::class,"MostrarHome"])->name('home-adm');
Route::get('/cadastro-evento',[EventosController::class,"MostrarCadastroEvento"])->name('cadastro-evento');
Route::get('/lista-evento',[EventosController::class,"MostrarEventoNome"])->name('lista-evento');
Route::get('/altera-evento',[EventosController::class,"MostrarEventoCodigo"])->name('show-altera-evento');
//para cadastrar
Route::post('/cadastrar-evento', [EventosController::class, 'CadastrarEventos'])->name('cadastra-evento');
//para deletar
Route::delete('apagar-evento', [EventosController::class,'Destroy'])->name('apagar-evento');
//para alterar
Route::put('/altera-evento', [EventosController::class,'Update'])->name('altera-evento');
