@extends ('layout')
@section ('header')
Generos
@endsection
@section ('conteudo')
<ul>    
@foreach($generos as $genero)
    <a href="{{route('generos.show', ['id_generos'=>$genero->id_genero])}}">
    <li>{{$genero->designacao}}</li></a>
@endforeach
</ul>
@endsection