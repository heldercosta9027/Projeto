@section('header')
<h1>Eliminar Filme</h1>
    @endsection

@section('conteudo')

<h2>Deseja eliminar o Filme?</h2>
<h2>{{$filme->titulo}}</h2>
<form method="post" action="{{route('filmes.destroy', ['id_filme'=>$filme->id_filme])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>
@endsection