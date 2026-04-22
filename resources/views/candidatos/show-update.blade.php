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
            <h1>Dados atualizados de: {{$candidato->nome}}</h1>
        </header>
        <h2>Dados Pessoais</h2>
        <p>Nome Completo: <strong>{{$candidato->nome}}</strong></p>
        <p>Data de Nascimento: <strong>{{$candidato->data_nascimento->format('d/m/Y')}}</strong></p>
        <p>CPF: <strong>{{$candidato->cpf}}</strong></p>
        <p>Email: <strong>{{$candidato->email}}</strong></p>
        <p>Telefone/Celular: <strong>{{$candidato->telefone}}</strong></p>
        <p>Cidade de Residência: <strong>{{$candidato->cidade}}</strong></p>
        <p>Estado de Residência: <strong>{{$candidato->estado}}</strong></p>
        <h2>Dados Acadêmicos</h2>
        <p>Curso de Graduação: <strong>{{$candidato->curso}}</strong></p>
        <p>Instituição de Ensino: <strong>{{$candidato->instituicao}}</strong></p>
        <p>Periodo: <strong>{{$candidato->periodo}}</strong></p>

        <a href="{{route('candidatos.index')}}">
            <button>Ir para a Lista</button>
        </a>
    </section>
</body>
</html>