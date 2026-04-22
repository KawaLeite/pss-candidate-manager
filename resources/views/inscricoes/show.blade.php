<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Dados do inscrito</title>
</head>
<body>
    <section class="container">
        <header>
            <h1>Dados de Inscrição de {{$nome}}</h1>
        </header>
        <h2>Dados Pessoais</h2>
        <p>Nome Completo: <strong>{{$nome}}</strong></p>
        <p>Data de Nascimento: <strong>{{$data_nascimento->format('d/m/Y')}}</strong></p>
        <p>CPF: <strong>{{$cpf}}</strong></p>
        <p>Email: <strong>{{$email}}</strong></p>
        <p>Telefone/Celular: <strong>{{$telefone}}</strong></p>
        <p>Cidade de Residência: <strong>{{$cidade}}</strong></p>
        <p>Estado de Residência: <strong>{{$estado}}</strong></p>
        <h2>Dados Acadêmicos</h2>
        <p>Curso de Graduação: <strong>{{$curso}}</strong></p>
        <p>Instituição de Ensino: <strong>{{$instituicao}}</strong></p>
        <p>Periodo: <strong>{{$periodo}}</strong></p>

        <a href="{{route('index.edital')}}">
            <button>Voltar Para o Edital</button>
        </a>
    </section>
</body>
</html>