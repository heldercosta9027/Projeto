<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmesController extends Controller
{
    //
    public function index(){
        
        $Filmes = Filme::paginate(4);
        return view('filmes.index', [
            'filmes'=>$Filmes
        ]);
    }
    public function show(Request $r){
        $idfilme = $r->id_filmes;
        
        $filme= Filme::where('id_filme',$idfilme)->first();
        
        return view ('filmes.show', [
            'filme'=> $filme
        ]);
    }
}
?>