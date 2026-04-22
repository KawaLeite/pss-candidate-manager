<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
        protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
        'email',
        'telefone',
        'cidade',
        'estado',
        'curso',
        'instituicao',
        'periodo'
    ];

        protected $table = 'inscricoes';
}
