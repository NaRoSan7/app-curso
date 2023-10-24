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

        return Redirect::route('index');
    }
}
