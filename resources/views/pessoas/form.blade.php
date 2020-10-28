@extends('template.base')
@section('titulo', 'Formulario de Pessoas')
@section('conteudo')
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
        <input class ="form-control" type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome ?? ''}}">
        @error('nome')
        <small class "text-danger"> {{ $message}}<small>
        @enderror
        <input class ="form-control" type="text" name="telefone" placeholder="Telefone" value="{{ $pessoa->telefone ?? ''}}">
        @error('telefone')
        <small class "text-danger"> {{ $message}}<small>
        @enderror
        <input class ="form-control" type="email" name="email" placeholder="Email" value="{{ $pessoa->email ?? '' }}">
        <input class ="form-control" type="text" name="cpf" placeholder="CPF" value="{{ $pessoa->cpf ?? '' }}">
        @error('cpf')
        <small class "text-danger"> {{ $message}}<small>
        @enderror
        <input class ="btn btn-primary"  type="submit" value="Salvar">
    
    </form>

    <a href="/pessoas"> Voltar </a>

@endsection