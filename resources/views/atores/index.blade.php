@extends ('layout')
<ul>    
@foreach($atores as $ator)
    <a href="{{route('atores.show', ['id_atores'=>$ator->id_ator])}}">
    <li>{{$ator->nome}}</li></a>
@endforeach
</ul>