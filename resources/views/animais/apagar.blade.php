{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Apagar | Animais para adoção')

@section('conteudo')

<p>Tem certeza que quer apagar? :O</p>
<p><em>{{ $animal['nome'] }}</em></p>

<form action="apagar"></form>

@endsection
