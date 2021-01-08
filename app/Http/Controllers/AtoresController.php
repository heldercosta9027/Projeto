<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;

class AtoresController extends Controller
{
    //
    public function index(){
        $atores = Ator::paginate(4);
        return view('atores.index', [
            'atores'=>$atores
        ]);
    }
    public function show(Request $r){
        $idator = $r->id_atores;
        
        $ator= Ator::where('id_ator',$idator)->with ('filmes') ->first();
        
        return view ('atores.show', [
            'ator'=> $ator
        ]);
    }
    public function create(){
        if(Gate::allows('admin')){
            $generos = Genero::all();
            $filmes = Autor::all();
        return view('atores.create',['generos'=>$generos,'filmes'=>$filmes]);
        }
    }
    public function store (Request $r){
        if(Gate::allows('admin')){
            $novoAtor=$r->validate([
                'nome'=>['required', 'min:3', 'max:50'],
                'nacionalidade'=>['nullable', 'min:3','max:40'],
                'data_nascimento'=>['nullable', 'date'],
                'fotografia'=>['nullable','image', 'max:2000'],   
            ]);
            $filme=$r->id_filme;
            $genero=$r->id_genero;
            
            return redirect()->route('atores.show',[
                'id'=>$ator->id_ator
            ]);
        }
    }
    public function edit(Request $r){
        $idAtor=$request->id_ator;
        $ator=Autor::where('id_ator',$idAtor)->with(['filme','generos'])->first();
        if(Gate::allows('atualizar.livro',$ator)|| Gate::allows('admin')){
            $filmesAtor=[];
            $generosAtor=[];
            $filmes=Filmes::all();
            $generos = Generos::all();
        foreach($ator->atores as $ator){
            $atoresAtor[] = $ator->id_autor;
        }
            return view('ator.edit',
                        ['filmes'=>$filmes,
                         'generos'=>$generos,/a 
                         'filmesAtor'=>$filmeAtor,
                         'generosAtor'=>$generoAtor                       
                        ]);
        }
        else {
            return redirect()->route('atores.index')
                ->with('msg','Não tem permissão para aceder à área pretendida.');
        }
    }
}
?>