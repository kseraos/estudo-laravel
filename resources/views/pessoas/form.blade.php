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
        <input type="text" name="nome" placeholder="Nome" value="{{ $pessoa->nome ?? ''}}">
        <input type="text" name="telefone" placeholder="Telefone" value="{{ $pessoa->telefone ?? ''}}" >
        <input type="email" name="email" placeholder="Email" value="{{ $pessoa->email ?? '' }}">
        <input type="submit" value="Salvar">
    
    </form>

    <a href="/pessoas"> Voltar </a>

@endsection