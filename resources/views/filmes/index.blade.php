@extends ('layout')
<ul>    
@foreach($filmes as $filme)
    <a href="{{route('filmes.show', ['id_filmes'=>$filme->id_filme])}}">
    <li>{{$filme->titulo}}</li></a>
@endforeach
</ul>