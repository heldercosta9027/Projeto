@extends ('layout')
ID: {{$genero->id_genero}}<br>  
Designação: {{$genero-> designacao}}<br>
Observações: {{$genero-> observacoes}}<br>
@if(count($genero->filmes)>0)
Filmes:
@foreach($genero->filmes as $filme)
{{$filme->titulo}}<br>
@endforeach
@else
<div class="alert alert-danger" role="alert">
Sem filme definido
</div>
@endif
<br>
<a href="{{route('generos.edit',['id_genero'=>$genero->id_genero])}}" class="btn btn-info" role="button"> Editar Genero </a>
<a href="{{route('generos.delete',['id_genero'=>$genero->id_genero])}}" class="btn btn-info" role="button"> Eliminar Genero </a>
