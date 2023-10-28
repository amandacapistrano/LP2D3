@extends('layout')

@section('title', 'Lista de Produtos')

@section('content')
    <h1>Lista de Produtos</h1>
    <ul>
        @foreach ($products as $product)
            <li> 
                <a href="{{ route ('products.show', $product['id']) }}">{{$product['name']}}</a>    
                
            </li>
        @endforeach
    </ul>
@endsection