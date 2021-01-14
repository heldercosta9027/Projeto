<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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
            $generos = Genero::all();
            $filmes = Filme::all();
        return view('atores.create',['generos'=>$generos,'filmes'=>$filmes]);
        
    }
    public function store (Request $r){
            $novoAtor=$r->validate([
                'nome'=>['required', 'min:3', 'max:50'],
                'nacionalidade'=>['nullable', 'min:3','max:40'],
                'data_nascimento'=>['nullable', 'date'],
                'fotografia'=>['nullable','image', 'max:2000']   
            ]);
            $filme=$r->id_filme;
            $genero=$r->id_genero;
            
            return redirect()->route('atores.show',[
                'id'=>$ator->id_ator
            ]);
    }
    public function edit(Request $r){
        $idAtor=$r->id_ator;
        $ator=Ator::where('id_ator',$idAtor)->with(['filme','generos'])->first();
            $filmesAtor=[];
            $generosAtor=[];
            $filmes=Filme::all();
            $generos=Genero::all();
        foreach($ator->atores as $ator){
            $atoresAtor[] = $ator->id_autor;
            return view('ator.edit',
                        ['filmes'=>$filmes,
                         'generos'=>$generos, 
                         'filmesAtor'=>$filmeAtor,
                         'generosAtor'=>$generoAtor                       
                        ]);
        }
        /*else {
            return redirect()->route('atores.index')
                ->with('msg','Não tem permissão para aceder à área pretendida.');
        }*/
    }
    public function update (Request $request){
        $idAtor=$request->id;
        $ator=Ator::where('id_livro',$idAtor)->first();
        if(Gate::allows('admin')){
            $atualizarAtor = $request->validate([
                'nome'=>['required', 'min:3', 'max:50'],
                'nacionalidade'=>['nullable', 'min:3','max:40'],
                'data_nascimento'=>['nullable', 'date'],
                'fotografia'=>['nullable','image', 'max:2000']
            ]);
        }
        $filmes=$request->id_filme;
        $generos=$request->id_genero;
        
        $ator->update($atualizarAtor);
        $ator->filmes()->sync($filmes);
        $ator->generos()->sync($generos);
        
        return redirect()->route('ator.show', [
            'id'=>$ator->id_ator
        ]);
    }
    
    public function delete(request $request){
        $ator = Ator::where('id_Ator',$request->ida)->first();
            if(is_null($ator)){
                return redirect()->route('atores.index')->with('msg','O ator não existe');
            }
            else{
                return view ('ator.delete',['livro'=>livro]);
            }
    }
        public function destroy(Request $request){
            $ator = Ator::where('id_ator', $request->ida)->first();
                $idAtor=$request->ida;
                $ator=Ator::findOrFail($idAtor->atores);
                $ator=Ator::findOrFail($idAtor->filmes);
                $ator=Ator::findOrFail($idAtor->generos);
                $ator->filmes()->detach($filmesAtor);
                $ator->generos()->detach($generosAtor);
                
                $ator->delete();
                if(is_null($ator)){
                    return redirect()->route('livros.index')->with('msg'. 'O ator não existe');
                }
                else{
                    $ator->delete();
                    return redirect()->route('ator.index')->with('msg','Livro eliminado!');
                }
        }
}
?>