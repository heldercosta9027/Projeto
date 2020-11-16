@extends ('layout')
ID:{{$ator->id_ator}}<br>
Nome:{{$ator-> nome}}<br>
Nacionalidade:{{$ator-> nacionalidade}}<br>
Data Nascimento:{{$ator->data_nascimento}}
@if(isset($ator->nome)>0)
@else
<div class="alert alert-danger" role="alert">
Sem ator definido
</div>
@endif