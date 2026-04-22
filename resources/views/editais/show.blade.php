<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Edital</title>
</head>
<body>
    <section class="container">
    <h1>Edital 01/2026</h1>
    <h2>Informações do Edital</h2>
    <p>Cargo: <strong>{{$cargo}}</strong></p>
    <p>Quantidade de Vagas: <strong>{{$vagas}}</strong></p>
    <p>Carga Horária: <strong>{{$carga_horaria}} horas semanais</strong></p>
    <h2>Datas Importantes</h2>
    <p>Período de Inscrição: <strong>{{$abertura->format('d/m/Y')}} a {{$fechamento->format('d/m/Y')}}</strong></p>
    <p>Data da Prova Teórica: <strong>{{$data_prova_teorica->format('d/m/Y')}}</strong></p>
    <p>Data da Prova Prática: <strong>{{$data_prova_pratica->format('d/m/Y')}}</strong></p>
    <p>Data da Entrevista: <strong>{{$data_entrevista->format('d/m/Y')}}</strong></p>
    <p>Data de Divulgação dos Resultados: <strong>{{$resultados->format('d/m/Y')}}</strong></p>
    <br>
    <a href="{{route('create')}}">
        <button>Faça sua Inscrição</button>
    </a>
    <br>
    <br>
    <a href="{{route('candidatos.index')}}">
        <button>
            Ver Lista de Candidatos
        </button>
        <br>
        <br>
    </a>
    <a href="{{route('index')}}">
        <button>Voltar</button>
    </a>
    </section>
</body>
</html>