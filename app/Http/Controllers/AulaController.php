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
            $query->where('tituloaula','like','%'.$valor.'%');
        });
        $registrosAula = $registrosAula->get();
        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }

    public function MostrarAlterarAula(Aula $registrosAula){
        //$registrosAula = Aula::All();
        return view('altera_aula',['registrosAula' => $registrosAula]);
    }

    public function AlterarBancoAula(Aula $registrosAula, Request $request){
        $registros = $request->validate([
            'idcurso' => 'required',
            'tituloaula' => 'string|required',
            'urlaula' => 'string|required',
           ]);

        //Esta linha é que altera o registro no banco.
         $registrosAula->fill($registros);
         $registrosAula->save();


        //alert("Dados alterados com sucesso");
        return Redirect::route('manipula-aula');
    }
}
