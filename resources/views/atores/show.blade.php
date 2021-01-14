@extends ('layout')
ID:{{$ator->id_ator}}<br>
Nome:{{$ator-> nome}}<br>
Nacionalidade:{{$ator-> nacionalidade}}<br>
Data Nascimento:{{$ator->data_nascimento}}<br>
@if(count($ator->filmes)>0)
Filmes:
@foreach($ator->filmes as $filme)
{{$filme->titulo}}
@endforeach
@else
<div class="alert alert-danger" role="alert">
Sem ator definido
</div>
@endif
<br>
<a href="{{route('atores.edit',['id_atores'=>$ator->id_ator])}}" class="btn btn-info" role="button"> Editar Autor </a>
<a href="{{route('atores.delete',['id_atores'=>$ator->id_ator])}}" class="btn btn-info" role="button"> Eliminar Autor </a>



