@extends ('layout')
@section ('header')
Generos
@endsection
@section ('conteudo')
<ul>    
@foreach($generos as $genero)
    <a href="{{route('generos.show', ['id_genero'=>$genero->id_genero])}}">
    <li>{{$genero->designacao}}</li></a>
@endforeach
</ul>
@if(auth()->check())
<a href="{{route('generos.create')}}" class="btn btn-info" role="button"> Novo Genero </a>
@endif
@endsection