<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/principal');

Route::view('/principal', 'principal')->name('principal');
Route::view('/categorias', 'categorias')->name('categorias');
Route::view('/detalhes_saude', 'detalhes_saude')->name('detalhes_saude');
Route::view('/alimentacao_glicemia', 'alimentacao_glicemia')->name('alimentacao_glicemia');
Route::view('/sinais_alerta', 'sinais_alerta')->name('sinais_alerta');
Route::view('/meu_controle', 'meu_controle')->name('meu_controle');