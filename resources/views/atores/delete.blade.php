@section('header')
<h1>Eliminar Autor</h1>
    @endsection

@section('conteudo')

<h2>Deseja eliminar o Autor?</h2>
<h2>{{$autor->nome}}</h2>
<form method="post" action="{{route('atores.destroy', ['id_ator'=>$ator->id_ator])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>
@endsection