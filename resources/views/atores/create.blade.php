<form action="{{}}" enctype="" method="post">

Nome: <input type="text" name="nome" value="{{old('nome')}}"><br>
    @if($errors->has('nome')) NOME inválido <br><br>
    @endif
    
Nacionalidade: <input type="text" name="nacionalidade" value="{{old('nacionalidade')}}"><br>
    @if($errors->has('nacionalidade')) NACIONALIDADE inválida <br><br>
    @endif
    
Data Nascimento: <input type="date" name="data_nascimento" value="{{old('data_nascimento)}}"><br>
    @if($errors->has('data_nascimento')) DATA NASCIMENTO inválida<br><br>
    @endif
    
Fotografia: <input type="file" name="fotografia" value="{{old('fotografia')}}"><br>
    @if($errors->has('fotografia'))FOTOGRAFIA inválida<br><br>
    @endif
    












</form>