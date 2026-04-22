<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Inscricao;

class InscricaoController extends Controller
{
    public function create(){
        return view('inscricoes.create');
    }

    public function store(Request $request){

        Inscricao::create($request -> all());
        
        return view('inscricoes.show', [
            'nome' => $request -> nome,
            'data_nascimento' => Carbon::parse ($request -> data_nascimento),
            'cpf' => $request -> cpf,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'cidade' => $request -> cidade,
            'estado' => $request -> estado,
            'curso' => $request -> curso,
            'instituicao' => $request -> instituicao,
            'periodo' => $request -> periodo
        ]);
        }
}

