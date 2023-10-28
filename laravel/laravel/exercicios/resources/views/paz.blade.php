<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<body>
   
    {{-- EX01: <h1>Paz no Oriente Médio!</h1>--}}

  {{-- **************EX02:
         @foreach($m as $mensagem)
            {{ $mensagem }} <br>
         @endforeach--}}

   {{--***************EX03: 
    {{ $m }} <br>
    --}}

    {{--***************EX04:     --}}
         {{ $m }} <br>
        @if($usuario)
        <h1>Usuário logado</h1>
        @else
        <h1>Usuário não logado</h1>
        @endif



    <a href="/">Voltar para Home</a>
</body>
</html>