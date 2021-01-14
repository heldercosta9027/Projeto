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
@if(auth()->check())
<a href="{{route('genero.create')}}" class="btn btn-info" role="button"> Novo Genero </a>
@endif
@endsection