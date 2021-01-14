@extends ('layout')
@section ('header')
Filmes
@endsection
@section ('conteudo')
<ul>    
@foreach($filmes as $filme)
    <a href="{{route('filmes.show', ['id_filme'=>$filme->id_filme])}}">
    <li>{{$filme->titulo}}</li></a>
@endforeach
</ul>
@if(auth()->check())
<a href="{{route('ator.create')}}" class="btn btn-info" role="button"> Novo Filme </a>
@endif
@endsection