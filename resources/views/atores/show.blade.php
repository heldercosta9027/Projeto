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