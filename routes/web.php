<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');

//visualizar e cadastrar a categoria
Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

//rota para manipular e alterar categoria
Route::get('/manipulacategoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-categoria");
Route::get('/alterar-categoria/{registrosCategoria}',[CategoriaController::class,'MostrarAlterarCategoria'])->name("alterar-categoria");

//visualizar e cadastrar curso
Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("cadastro-curso");

//rota para manipular e alterar curso
Route::get('/manipulacurso',[CursoController::class,'mostrarManipulaCurso'])->name("manipula-curso");
Route::get('/alterar-curso/{registrosCurso}',[CursoController::class,'MostrarAlterarCurso'])->name("alterar-curso");

//visualizar e cadastrar aula
Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
Route::post('/cadaula',[AulaController::class,'cadastroAula'])->name("cadastro-aula");

//rota para manipular e alterar aula
Route::get('/manipulaaula',[AulaController::class,'mostrarManipulaAula'])->name("manipula-aula");
Route::get('/alterar-aula/{registrosCategoria}',[AulaController::class,'MostrarAlterarAula'])->name("alterar-aula");
