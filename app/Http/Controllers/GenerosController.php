<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\Filme;

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
    public function create(){
        $filmes = Filme::all();
        $atores = Ator::all();
        return view('generos.create',['filmes'=>$filmes,'atores'=>$atores]);
    }
    public function store(Request $r){
        $novoGenero=$r->validate([
            'designacao'=>['required','min:3','max=30'],
            'observacoes'=>['nullable','min:3','max:1000']
        ]);
        $genero=Genero::create($novoGenero);
        
        return redirect()->route('genero.show',[
            'id_genero'=>$genero->id_genero
        ]);
    }
    public function edit(Request $request){
        $idGenero=$request->id_genero;
        $genero=Genero::where('id_genero', $idGenero)->first();
        return view('genero.edit',[
            'genero'=>$genero
        ]);
    }
    public function update(Request $request){
        $idGenero=$request->id_genero;
        $genero=Genero::where('id_genero',$idGenero)->first();
        $atualizarGenero=$request->validate([
             'designacao'=>['required','min:3','max=30'],
            'observacoes'=>['nullable','min:3','max:1000']
        ]);
        $genero->update($atualizarGenero);
        return redirect()->route('generos.show',[
            'id_generos'=>$generos->id_genero
        ]);
    }
    public function delete(Request $r){
        $genero=Genero::where('id_genero',$r->id_genero)->first();
            if(is_null($genero)){
                return redirect()->route('genero.index')
                    ->with('msg','O genero não existe');
            }
        else
        {
            return view('genero.delete',['genero'=>$genero]);
        }
    }
    public function destroy(Request $r){
        $genero=Geero::where('id_genero', $r->id_genero)->first();
        if(is_null($genero)){
            return redirect()->route('genero.index')->with('msg', 'Genero eliminado!');
        }     
}
?>