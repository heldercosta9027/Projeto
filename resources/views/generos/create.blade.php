<form action="{{filmes.store}}" enctype="" method="post">
    
Designação:<input type="text" name="designacao" value="{{old('designacao')}}"><br>
    @if($errors->has('designacao')) Designação inválida <br><br>
    @endif
    
Observações:<input type="text" name="observacoes" value="{{old('observacoes')}}"><br>
    @if($errors->has('observacoes')) Observações inválidas <br><br>
    @endif

<input type="submit" value="enviar">   
</form>