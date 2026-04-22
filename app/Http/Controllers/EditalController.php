<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class EditalController extends Controller
{
    public function index(){
        $cargo = "Analista de Sistemas";
        $abertura_inscricao = new DateTime('2026-03-20');
        $fechamento_inscricao = new DateTime ('2026-04-10');
        $dia_atual = new DateTime('2026-04-25');
        $data_prova_teorica = new DateTime('2026-04-15');
        $data_prova_pratica = new DateTime('2026-04-20');
        $data_entrevista = new DateTime ('2026-04-25');
        $data_divulgacao_resultados = new DateTime('2026-05-01');
        $quantidade_vagas = 5;
        $carga_horaria = 60;

        return view ('editais.index', 
        ['cargo' => $cargo,
        'abertura' => $abertura_inscricao,
        'fechamento' => $fechamento_inscricao,
        'dia_atual' => $dia_atual,
        'vagas' => $quantidade_vagas,
        'carga_horaria' => $carga_horaria,
        'data_prova_teorica' => $data_prova_teorica,
        'data_prova_pratica' => $data_prova_pratica,
        'data_entrevista' => $data_entrevista,
        'resultados' => $data_divulgacao_resultados,
        ]);
    }

    public function show(){

        $cargo = "Analista de Sistemas";
        $abertura_inscricao = new DateTime('2026-03-20');
        $fechamento_inscricao = new DateTime ('2026-04-10');
        $data_prova_teorica = new DateTime('2026-04-15');
        $data_prova_pratica = new DateTime('2026-04-20');
        $data_entrevista = new DateTime ('2026-04-25');
        $data_divulgacao_resultados = new DateTime('2026-05-01');
        $quantidade_vagas = 5;
        $carga_horaria = 40;

        return view ('editais.show',[
        'cargo' => $cargo,
        'abertura' => $abertura_inscricao,
        'fechamento' => $fechamento_inscricao,
        'vagas' => $quantidade_vagas,
        'carga_horaria' => $carga_horaria,
        'data_prova_teorica' => $data_prova_teorica,
        'data_prova_pratica' => $data_prova_pratica,
        'data_entrevista' => $data_entrevista,
        'resultados' => $data_divulgacao_resultados,
            ]);
    }
}
