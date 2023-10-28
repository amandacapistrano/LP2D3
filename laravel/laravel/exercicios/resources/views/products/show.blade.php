@extends('layout')

@section('title', 'Detalhes do Produto')

@section('content')
    <h1>Detalhes do Produto</h1>
    <p><strong>Nome: </strong> {{ $product['name'] }}</p>
    <p><strong>Descrição: </strong> {{ $product['description'] }}</p>

@endsection