<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use Illuminate\Support\Carbon;

class CandidatoController extends Controller
{
    public function index(){
        $candidatos = Inscricao::all();
        return view('candidatos.index', compact('candidatos'));
    }
    public function destroy($id){
        $candidato = Inscricao::findORfail($id);
        $candidato -> delete();
        return redirect()->route('candidatos.index');
    }
    public function edit($id){
        $candidato = Inscricao::findORfail($id);
        return view('candidatos.update', compact('candidato'));
    }
    public function update (Request $request, $id){
        $candidato = Inscricao::findORfail($id);

        $candidato->nome = $request -> nome;
        $candidato->data_nascimento = Carbon::parse($request -> data_nascimento);
        $candidato->cpf = $request -> cpf;
        $candidato->email = $request -> email;
        $candidato->telefone = $request -> telefone;
        $candidato->cidade = $request -> cidade;
        $candidato->estado = $request -> estado;
        $candidato->curso = $request -> curso;
        $candidato->instituicao = $request -> instituicao;
        $candidato->periodo = $request -> periodo;

        $candidato -> save();

        return view('candidatos.show-update', compact('candidato'));
    }
}
