<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InscricaoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identificador_candidato' => $this->id,
            'nome_candidato' => $this->nome,
            'nascimento_candidato' => $this->data_nascimento,
            'identidade_candidato' => $this->cpf,
            'email_candidato' => $this->email,
            'telefone_candidato' => $this->telefone,
            'cidade_candidato' => $this->cidade,
            'estado_candidato' => $this->estado,
            'curso_candidato' => $this->curso,
            'instituicao_curso' => $this->instituicao,
            'periodo_curso' => $this->periodo



        ];
    }
}
