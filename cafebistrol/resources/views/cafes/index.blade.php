<x-layout title="Cafes teste">
    <a href="cafes/criar">Adicionar</a>
    <ul>
        @foreach($cafes as $cafe)
        <li>{{$cafe}}</li>
        @endforeach
    </ul>
</x-layout>