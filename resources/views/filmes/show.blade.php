@extends ('layout')
ID:{{$filme->id_filme}}<br>
Titulo:{{$filme-> titulo}}<br>
Quantidade:{{$filme-> quantidade}}<br>
Idioma:{{$filme->idioma}}<br>
ID Ator:{{$filme->id_ator}}
@if(isset($filme->titulo)>0)
@else
<div class="alert alert-danger" role="alert">
Sem titulo definido
</div>
@endif