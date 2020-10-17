<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de pessoas</title>
</head>
<body>
    <h1>Formaulario de Pessoas</h1>

    @if (isset($pessoa))
    <form action="/pessoas/{{ $pessoa->id }}" method="post">
        @method('PUT')
    
    @else 
        <form action="/pessoas" method="post">
    
    @endif
    
    <form action="/pessoas" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome ?? ''}}">
        <input type="text" name="telefone" placeholder="Telefone" value="{{ $pessoa->telefone ?? ''}}" >
        <input type="email" name="email" placeholder="Email" value="{{ $pessoa->email ?? '' }}">
        <input type="submit" value="Salvar">
    
    </form>

    <a href="/pessoas"> Voltar </a>
</body>
</html>