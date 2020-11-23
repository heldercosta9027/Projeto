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

