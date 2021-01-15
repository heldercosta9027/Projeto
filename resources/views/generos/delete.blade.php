@section('header')
<h1>Eliminar Genero</h1>
    @endsection
@section('conteudo')
<h2>Deseja eliminar o Genero?</h2>
<h2>{{$genero->designacao}}</h2>
<form method="post" action="{{route('generos.destroy', ['id_genero'=>$genero->id_genero])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>
@endsection