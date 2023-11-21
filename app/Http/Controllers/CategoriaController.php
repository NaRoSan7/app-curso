<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //abre o formulario de cadastro
    public function mostrarFormCat(){
        return view('cad_categoria');
    }

    public function mostrarManipulaCategoria(){
        $registrosCategoria = Categoria::All();

        return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);
    }

    public function index(){
        return view('index');
    }

    public function cadastroCat(Request $request){
        $registrosCat = $request->validate([
            'nomecategoria' => 'string|required'
        ]);

        Categoria::create($registrosCat);

        return Redirect::route('manipula-categoria');
    }

    public function DeletarCategoria(Categoria $registrosCategoria){
        $registrosCategoria->delete();
        
        return Redirect::route('manipula-categoria');
    }

    public function BuscarCategoriaNome(Request $request){
        $registrosCategoria = Categoria::query();
        $registrosCategoria->when($request->categoria,function($query, $valor){
            $query->where('nomecategoria','like','%'.$valor.'%');
        });
        $registrosCategoria = $registrosCategoria->get();
        return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);
    }

    public function MostrarAlterarCategoria(Categoria $registrosCategoria){
        //$registrosCategoria = Categoria::All();
        return view('altera_categoria',['registrosCategoria' => $registrosCategoria]);
    }

    public function AlterarBancoCategoria(Categoria $registrosCategoria, Request $request){
        $registrosCat = $request->validate([
            'nomecategoria' => 'string|required'
        ]);

        //Esta linha é que altera o registro no banco.
        $registrosCat->fill($registros);
        $registrosCat->save();
        
        //alert("Dados alterados com sucesso!");
        return Redirect::route('manipula-categoria');
    }

}
