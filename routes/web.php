<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//visualizar e cadastrar a categoria
Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

//rota para manipular a categoria
Route::get('/manipulacategoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-categoria");

//rota para mostrar as categorias cadastradas
Route::get('/alterar-categoria/{registrosCategoria}',[CategoriaController::class,'MostrarAlterarCategoria'])->name("alterar-categoria");
Route::put('/alterarbancocategoria/{registrosCategoria}',[CategoriaController::class,'AlterarBancoCategoria'])->name('alterar-banco-categoria');

//rota para deletar a categoria
Route::delete('/deletar-categoria/{registrosCategoria}',[CategoriaController::class,'DeletarCategoria'])->name('deletar-categoria');

//rota para buscar por nome da categoria
Route::get('/buscacategorianome',[CategoriaController::class,'BuscarCategoriaNome'])->name("busca-categoria-nome");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//visualizar e cadastrar curso
Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("cadastro-curso");

//rota para manipular o curso
Route::get('/manipulacurso',[CursoController::class,'mostrarManipulaCurso'])->name("manipula-curso");

//rota para mostrar os cursos cadastradas
Route::get('/alterar-curso/{registrosCurso}',[CursoController::class,'MostrarAlterarCurso'])->name("alterar-curso");
Route::put('/alterarbancocurso/{registrosCurso}',[CursoController::class,'AlterarBancoCurso'])->name('alterar-banco-curso');

//rota para deletar o curso
Route::delete('/deletar-curso/{registrosCurso}',[CursoController::class,'DeletarCurso'])->name('deletar-curso');

//rota para buscar por nome do curso
Route::get('/buscacursonome',[CursoController::class,'BuscarCursoNome'])->name("busca-curso-nome");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//visualizar e cadastrar aula
Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
Route::post('/cadaula',[AulaController::class,'cadastroAula'])->name("cadastro-aula");

//rota para manipular a aula
Route::get('/manipulaaula',[AulaController::class,'mostrarManipulaAula'])->name("manipula-aula");

//rota para mostrar as aulas cadastradas
Route::get('/alterar-aula/{registrosAula}',[AulaController::class,'MostrarAlterarAula'])->name("alterar-aula");
Route::put('/alterarbancoaula/{registrosAula}',[AulaController::class,'AlterarBancoAula'])->name('alterar-banco-aula');

//rota para deletar a aula
Route::delete('/deletar-aula/{registrosAula}',[AulaController::class,'DeletarAula'])->name('deletar-aula');

//rota para buscar por nome da aula
Route::get('/buscaaulanome',[AulaController::class,'BuscarAulaNome'])->name("busca-aula-nome");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////