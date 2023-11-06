<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function mostrarFormAula(){
        return view('cad_aula');
    }

    public function mostrarManipulaAula(){
        $registrosAula = Aula::All();

        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }

    public function index(){
        return view('index');
    }

    public function cadastroAula(Request $request){
        $registrosAula = $request->validate([
            'idcurso' => 'numeric|required',
            'tituloaula' => 'string|required',
            'urlaula' => 'string|required'
        ]);

        Aula::create($registrosAula);

        return Redirect::route('manipula-aula');
    }

    public function DeletarAula(Aula $registrosAula){
        $registrosAula->delete();
        return Redirect::route('manipula-aula');
    }

    public function BuscarAulaNome(Request $request){
        $registrosAula = Aula::query();
        $registrosAula->when($request->aula,function($query, $valor){
            $query->where('aula','like','%',$valor,'%');
        });
        $registrosAula = $registrosAula->get();
        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }
}
