<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <title>Lista de Candidatos</title>
</head>
<body>
    <section class="container">
        <header>
            <h1>Lista de Candidatos</h1>
        </header>
    <div class="tabela-responsive">
        <table class="tabela-candidatos">
                <thead>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Curso</th>
                    <th>Instituicao</th>
                    <th>Periodo</th>
                </thead>
                <tbody>
                    @foreach($candidatos as $candidato)
                <tr>
                    <td>
                    <form action="{{route('destroy', $candidato -> id)}}" method="post" onsubmit="return confirm ('O candidato será excluido')">
                    @csrf
                    @method ('DELETE') <button type="submit">🗑️</button>
                    </form>
                    <a href="{{route('edit', $candidato->id)}}">
                        <button>📝</button>
                    </a>
                    </td>
                    <td>{{$candidato -> id}}</td>
                    <td>{{$candidato -> nome}}</td>
                    <td>{{$candidato -> data_nascimento}}</td>
                    <td>{{$candidato -> cpf}}</td>
                    <td>{{$candidato -> email}}</td>
                    <td>{{$candidato -> telefone}}</td>
                    <td>{{$candidato -> cidade}}</td>
                    <td>{{$candidato -> estado}}</td>
                    <td>{{$candidato -> curso}}</td>
                    <td>{{$candidato -> instituicao}}</td>
                    <td>{{$candidato -> periodo}}</td>
                </tr>
                    @endforeach
                </tbody> 
        </table>
    </div>
    <a href="{{route('index.edital')}}">
        <button>Voltar para o Edital</button>
    </a>
    </section>

    
</body>
</html>