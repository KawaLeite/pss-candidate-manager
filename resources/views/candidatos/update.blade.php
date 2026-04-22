<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>Inscrição</title>
</head>
<body>
    <section class="container">
    <header>
        <h1>Preencha o Formulário de Inscrição</h1>
    </header>
        <form action="{{route('update', $candidato -> id)}}" method="post">
            @csrf
            @method ('PUT')
            <h2>Informações Pessoais:</h2>
            <label for="nome">Nome Completo: </label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Kawã Daniel da Silva Leite" required value="{{$candidato -> nome}}">
            <br>
            <label for="data_nascimento">Data de Nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" required value="{{$candidato -> data_nascimento}}">
            <br>
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf" placeholder="Ex: 000.000.000-00" required value="{{$candidato -> cpf}}">
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Ex: usuario@gmail.com" required value="{{$candidato -> email}}">
            <br>
            <label for="telefone">Telefone/Celular: </label>
            <input type="text" name="telefone" id="telefone" placeholder="Ex: (00) 00000-0000" required value="{{$candidato -> telefone}}">
            <br>
            <label for="cidade">Cidade de Residência: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Ex: Londrina" value="{{$candidato -> cidade}}">
            <br>
            <label for="estado">Estado de Residência: </label>
            <input type="text" name="estado" id="estado" placeholder="Ex: Paraná" value="{{$candidato -> estado}}">
            <h2>Informações acadêmicas: </h2>
            <label for="curso">Selecione seu Curso: </label> 
            <select name="curso" id="curso">
                <option value="Análise e Desenvolvimento de Sistemas" {{$candidato->curso == 'Análise e Desenvolvimento de Sistemas' ? 'selected' : ''}}>Análise e Desenvolvimento de Sistemas</option>
                <option value="Engenharia de Software" {{$candidato->curso == 'Engenharia de Software' ? 'selected' : ''}}>Engenharia de Software</option>
                <option value="Sistemas de Informação" {{$candidato->curso == 'Sistemas de Informação' ? 'selected' : ''}}>Sistemas de Informação</option>
                <option value="Ciências da Computação" {{$candidato->curso == 'Ciências da Computação' ? 'selected' : ''}}>Ciências da Computação</option>
                <option value="Engenharia da Computação" {{$candidato->curso == 'Engenharia da Computação' ? 'selected' : ''}}>Engenharia da Computação</option>
                <option value="Outro" {{$candidato->curso == 'Outro' ? 'selected' : ''}}>Outro</option>
            </select>
            <br>
            <label for="instituicao">Instituição de ensino: </label>
            <input type="text" name="instituicao" id="instituicao" value="{{$candidato -> instituicao}}">
            <br>
            <label for="periodo">Período Atual: </label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="1º Período" {{$candidato->periodo == '1º Período' ? 'checked' : ''}}>1º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="2º Período" {{$candidato->periodo == '2º Período' ? 'checked' : ''}}>2º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="3º Período" {{$candidato->periodo == '3º Período' ? 'checked' : ''}}>3º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="4º Período" {{$candidato->periodo == '4º Período' ? 'checked' : ''}}>4º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="5º Período" {{$candidato->periodo == '5º Período' ? 'checked' : ''}}>5º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="6º Período" {{$candidato->periodo == '6º Período' ? 'checked' : ''}}>6º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="7º Período" {{$candidato->periodo == '7º Período' ? 'checked' : ''}}>7º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="8º Período" {{$candidato->periodo == '8º Período' ? 'checked' : ''}}>8º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="9º Período" {{$candidato->periodo == '9º Período' ? 'checked' : ''}}>9º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="10º Período" {{$candidato->periodo == '10º Período' ? 'checked' : ''}}>10º Período</label>
            <br>
            <br>
            <button type="submit">Finalizar Atualização</button>
        </form>
        <br>
        <a href="{{route('candidatos.index')}}">
            <button>Voltar para a Lista</button>
        </a>
    </section>
</body>
</html>