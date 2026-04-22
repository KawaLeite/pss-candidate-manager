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
        <form action="{{route('store')}}" method="post">
            @csrf
            <h2>Informações Pessoais:</h2>
            <label for="nome">Nome Completo: </label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Kawã Daniel da Silva Leite" required>
            <br>
            <label for="data_nascimento">Data de Nascimento: </label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br>
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf" placeholder="Ex: 000.000.000-00" required>
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Ex: usuario@gmail.com" required>
            <br>
            <label for="telefone">Telefone/Celular: </label>
            <input type="text" name="telefone" id="telefone" placeholder="Ex: (00) 00000-0000" required>
            <br>
            <label for="cidade">Cidade de Residência: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Ex: Londrina">
            <br>
            <label for="estado">Estado de Residência: </label>
            <input type="text" name="estado" id="estado" placeholder="Ex: Paraná">
            <h2>Informações acadêmicas: </h2>
            <label for="curso">Selecione seu Curso: </label> 
            <select name="curso" id="curso">
                <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                <option value="Engenharia de Software">Engenharia de Software</option>
                <option value="Sistemas de Informação">Sistemas de Informação</option>
                <option value="Ciências da Computação">Ciências da Computação</option>
                <option value="Engenharia da Computação">Engenharia da Computação</option>
                <option value="Outro">Outro</option>
            </select>
            <br>
            <label for="instituicao">Instituição de ensino: </label>
            <input type="text" name="instituicao" id="instituicao">
            <br>
            <label for="periodo">Período Atual: </label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="1º Período">1º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="2º Período">2º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="3º Período">3º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="4º Período">4º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="5º Período">5º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="6º Período">6º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="7º Período">7º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="8º Período">8º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="9º Período">9º Período</label>
            <br>
            <label><input type="radio" name="periodo" id="periodo" value="10º Período">10º Período</label>
            <br>
            <br>
            <button type="submit">Finalizar Inscrição</button>
        </form>
        <br>
        <a href="{{route('index.edital')}}">
            <button>Voltar para o Edital</button>
        </a>
    </section>
</body>
</html>