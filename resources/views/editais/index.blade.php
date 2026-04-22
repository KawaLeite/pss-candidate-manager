<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Home</title>
</head>
<body>
    <section class="container">
    <h1>Gerenciador de Candidatos</h1>
    <h2>Edital Disponível: </h2>
    <br>
    <h1>Processo Seletivo Simplificado para Analista de Sistemas na Secretária de Tecnologia</h1>
    @if ($dia_atual >= $abertura && $dia_atual <= $fechamento)
        <p>Status do Processo Seletivo: <stong>Em período de inscrição</stong></p>
    @elseif ($dia_atual < $abertura)
        <p>Status do Processo Seletivo: As inscrições começam em breve, vão do período de <strong>{{$abertura->format('d/m/Y')}}</strong> até <strong>{{$fechamento->format('d/m/Y')}}</strong></p>
    @elseif ($dia_atual > $fechamento && $dia_atual < $data_prova_teorica)
        <p>Status do Processo Seletivo: Período de inscrição encerrado, prova teórica ocorrerá em <strong>{{$data_prova_teorica->format('d/m/Y')}}</strong></p>
    @elseif ($dia_atual == $data_prova_teorica)
        <p>Status do Processo Seletivo: <strong>Prova teórica ocorrendo</strong></p>
    @elseif ($dia_atual > $data_prova_teorica && $dia_atual < $data_prova_pratica)
        <p>Status do Processo Seletivo: Em andamento, prova prática ocorrerá em <strong>{{$data_prova_pratica->format('d/m/Y')}}</strong></p>
    @elseif ($dia_atual == $data_prova_pratica)
        <p>Status do Processo Seletivo: <strong>Prova prática ocorrendo</strong></p>
    @elseif($dia_atual > $data_prova_pratica && $dia_atual < $data_entrevista)
        <p>Status do Processo Seletivo: Em andamento, entevista ocorrerá em <strong>{{$data_entrevista->format('d/m/Y')}}</strong></p>
    @elseif ($dia_atual == $data_entrevista)
        <p>Status do Processo Seletivo: <strong>Entrevista ocorrendo</strong></p>
    @elseif ($dia_atual > $data_entrevista && $dia_atual < $resultados)
            <p>Status do Processo Seletivo: <strong>Aguardando Resultados</strong></p>
    @elseif ($dia_atual == $resultados)
            <p>Status do Processo Seletivo: <strong>Divulgação dos Resultados</strong></p>
    @elseif ($dia_atual > $resultados)
            <p>Status do Processo Seletivo: <strong>Processo Encerrado</strong></p>
    @endif
        
    <br>
    <a href="{{route('index.edital')}}">
        <button>Ver Edital</button>
    </a>

</section>
    
</body>
</html>