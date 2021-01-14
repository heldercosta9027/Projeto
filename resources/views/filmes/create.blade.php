<form action="{{filmes.store}}" enctype="" method="post">
    
Titulo:<input type="text" name="titulo" value="{{old('titulo')}}"><br>
    @if($errors->has('titulo')) TITULO inválido <br><br>
    @endif
    
Sinopse:<textarea name="sinopse"></textarea><br>
    
Quantidade:<input type="text" name="quantidade" value="{{old('quantidade')}}"><br>
    @if($errors->has('quantidade')) Quantidade inválida <br><br>
    @endif
    
Idioma:<input type="text" name="idioma" value="{{old('idioma')}}"><br>
    @if($errors->has('idioma')) Idioma inválido<br><br>
    @endif

<input type="submit" value="enviar">   
</form>