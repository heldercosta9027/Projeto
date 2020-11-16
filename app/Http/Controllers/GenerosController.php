<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //
    public function index(){
        
        $Generos = Genero::paginate(4);
        return view('generos.index', [
            'generos'=>$Generos
        ]);
    }
    public function show(Request $r){
        $idgenero = $r->id_generos;
        
        $genero= Genero::where('id_genero',$idgenero)->first();
        
        return view ('generos.show', [
            'genero'=> $genero
        ]);
    }
}
?>