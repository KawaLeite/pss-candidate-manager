<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Http\Resources\InscricaoResource;
use Illuminate\Validation\Rules\In;

class InscricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return InscricaoResource::collection(Inscricao::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacao = $request->validate([
            'nome_candidato' => 'required|string',
            'nascimento_candidato' => 'required|date',
            'identidade_candidato' => 'required|string|unique:inscricoes,cpf',
            'email_candidato' => 'required|string',
            'telefone_candidato' => 'required|string',
            'cidade_candidato' => 'required|string',
            'estado_candidato' => 'required|string',
            'curso_candidato' => 'required|string',
            'instituicao_curso' => 'required|string',
            'periodo_curso' => 'required|string'
        ]);

        $cadastro_candidato = Inscricao::create([
            'nome' => $validacao['nome_candidato'],
            'data_nascimento' => $validacao['nascimento_candidato'],
            'cpf' => $validacao['identidade_candidato'],
            'email' => $validacao['email_candidato'],
            'telefone' => $validacao['telefone_candidato'],
            'cidade' => $validacao['cidade_candidato'],
            'estado' => $validacao['estado_candidato'],
            'curso' => $validacao['curso_candidato'],
            'instituicao' => $validacao['instituicao_curso'],
            'periodo' => $validacao['periodo_curso']
        ]);
        return new InscricaoResource($cadastro_candidato);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $candidato = Inscricao::findOrFail($id);
        return new InscricaoResource($candidato);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $candidato = Inscricao::findORFail($id);
        $validacao = $request->validate([
            'nome_candidato' => 'sometimes|string',
            'nascimento_candidato' => 'sometimes|date',
            'identidade_candidato' => 'sometimes|string|unique:inscricoes,cpf,' . $id,
            'email_candidato' => 'sometimes|string',
            'telefone_candidato' => 'sometimes|string',
            'cidade_candidato' => 'sometimes|string',
            'estado_candidato' => 'sometimes|string',
            'curso_candidato' => 'sometimes|string',
            'instituicao_curso' => 'sometimes|string',
            'periodo_curso' => 'sometimes|string'
        ]);
        $candidato->update([
            'nome' => $validacao['nome_candidato'] ?? $candidato->nome,
            'data_nascimento' => $validacao['nascimento_candidato'] ?? $candidato->data_nascimento,
            'cpf' => $validacao['identidade_candidato'] ?? $candidato->cpf,
            'email' => $validacao['email_candidato'] ?? $candidato->email,
            'telefone' => $validacao['telefone_candidato'] ?? $candidato->telefone,
            'cidade' => $validacao['cidade_candidato'] ?? $candidato->cidade,
            'estado' => $validacao['estado_candidato'] ?? $candidato->estado,
            'curso' => $validacao['curso_candidato'] ?? $candidato->curso,
            'instituicao' => $validacao['instituicao_curso'] ?? $candidato->instituicao,
            'periodo' => $validacao['periodo_curso'] ?? $candidato->periodo
        ]);
        return new InscricaoResource($candidato);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidato = Inscricao::findOrFail($id);
        $candidato->delete();
        return response()->json([
            'message' => 'Candidato deletado com sucesso'
        ], 200);
    }
}
