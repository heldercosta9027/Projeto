@extends ('layout')
@section ('header')
Atores
@endsection
@section ('conteudo')
<ul>    
@foreach($atores as $ator)
    <a href="{{route('atores.show', ['id_atores'=>$ator->id_ator])}}">
    <li>{{$ator->nome}}</li></a>
@endforeach
</ul>
@if(auth()->check())
<a href="{{route('ator.create')}}" class="btn btn-info" role="button"> Novo Livro </a>
@endif
@endsection