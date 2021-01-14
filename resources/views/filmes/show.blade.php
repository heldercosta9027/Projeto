@extends ('layout')
ID:{{$filme->id_filme}}<br>
Titulo:{{$filme-> titulo}}<br>
Quantidade:{{$filme-> quantidade}}<br>
Idioma:{{$filme->idioma}}<br>
@if(isset($filme->ator))
Ator:
{{$filme->ator->nome}}
@else
<div class="alert alert-danger" role="alert">
Sem titulo definido
</div>
@endif
<br>
<a href="{{route('filmes.edit',['id_filme'=>$filme->id_filme])}}" class="btn btn-info" role="button"> Editar Filme </a>
<a href="{{route('filmes.delete',['id_filme'=>$filme->id_filme])}}" class="btn btn-info" role="button"> Eliminar Filme </a>