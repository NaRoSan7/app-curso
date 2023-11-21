<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function mostrarFormCurso(){
        return view('cad_curso');
    }

    public function mostrarManipulaCurso(){
        $registrosCurso = Curso::All();

        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }

    public function index(){
        return view('index');
    }

    public function cadastroCurso(Request $request){
        

        $registrosCurso = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'idcategoria' => 'numeric|required',
            'valor' => 'numeric|required'
        ]);
        
        Curso::create($registrosCurso);

        return Redirect::route('manipula-curso');
    }

    public function DeletarCurso(Curso $registrosCurso){
        $registrosCurso->delete();
        return Redirect::route('manipula-curso');
    }

    public function BuscarCursoNome(Request $request){
        $registrosCurso = Curso::query();
        $registrosCurso->when($request->curso,function($query, $valor){
            $query->where('nomecurso','like','%'.$valor.'%');
        });
        $registrosCurso = $registrosCurso->get();
        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }

    public function MostrarAlterarCurso(Curso $registrosCurso){
        //$registrosCurso = Curso::All();
        return view('altera_curso',['registrosCurso' => $registrosCurso]);
    }

    public function AlterarBancoCurso(){
        $registros = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'idcategoria' => 'required',
            'valor' => 'numeric|required'
        ]);

        //Esta linha é que altera o registro no banco.
        $registrosCurso->fill($registros);
        $registrosCurso->save();


       //alert("Dados alterados com sucesso");
       return Redirect::route('manipula-aula');
    }
}
