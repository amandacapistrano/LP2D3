@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>

    <form action="/criarEventoSubmit" method="post" enctype="multipart/form-cidade">
        @csrf
      
        <div class="form-group">
            <label for="title">Nome evento:</label>
            <input type="text" class="form-control" id="nomeEvento" name="nomeEvento" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Data:</label>
            <input type="date" class="form-control" id="data" name="data" placeholder="">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="privado" id="privado" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea class="form-control" name="descricao" id="descricao" placeholder="Descrição do evento"></textarea>        
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection