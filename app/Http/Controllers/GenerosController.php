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
        $idgenero = $r->id_genero;
        
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
        
        return redirect()->route('generos.show',[
            'id_genero'=>$genero->id_genero
        ]);
    }
    public function edit(Request $request){
        $idGenero=$request->id_genero;
        $genero=Genero::where('id_genero', $idGenero)->first();
        return view('generos.edit',[
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
            'id_genero'=>$generos->id_genero
        ]);
    }
    public function delete(Request $r){
        $idGenero=$r->id_genero;
        $genero=Genero::where('id_genero',$idGenero)->first();
            if(is_null($genero)){
                return redirect()->route('genero.index')
                    ->with('msg','O genero não existe');
            }
        else
        {
            return view('generos.delete',['genero'=>$genero]);
        }
    }
    public function destroy(Request $r){
        $idGenero=$r->id_genero;
        $genero=Genero::where('id_genero',$idGenero)->first();
        if(is_null($genero)){
            return redirect()->route('generos.index')->with('msg', 'Genero eliminado!');
        }
    }
}
?>