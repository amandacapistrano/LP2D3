@extends('layout')

@section('title', 'Formulário de contato')

@section('content')
    <h1>Formulário de contato</h1>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method = "post" action="{{ route('processContactForm') }}">
        @csrf
        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>

        <label for="message">Mensagem: </label>
        <textarea name="message" id="message" required></textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection