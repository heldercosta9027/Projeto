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
        
        $filme= Filme::where('id_filme',$idfilme)->with ('ator')->first();
        
        return view ('filmes.show', [
            'filme'=> $filme
        ]);
    }
    public function create(){
        $generos = Genero::all();
        $atores = Ator::all();
        return view('atores.create',['generos'=>$generos,'atores'=>$atores]);
    }
    public function store($request $r){
        $novoFilme=$r->validate([
            'nome'=>['required','min:3','max=100'],
            'nacionalidade'=>['nullable','min:3','max:20'],
            'data_nascimento'=>['nullable','date'],
            'fotografia'=>['nullable','min:1', 'max:255']
        ]);
        $filme=Filme::create($novoFilme);
        
        return redirect()->route('filmes.show',[
            'id_filme'=>$filme->id_filme
        ]);
    }
    public function edit(Request $request){
        $idFilme=$request->id_filme;
        $filme=Filme::where('id_filme', $idFilme)->first();
        return view('filmes.edit',[
            'filme'=>$filme
        ]);
    }
    public function update(Request $request){
        $idFilme=$request->id_filme;
        $filme=Filme::where('id_filme',$idFilme)->first();
        $atualizarFilme=$request->validate([
            'nome'=>['required','min:3','max=100'],
            'nacionalidade'=>['nullable','min:3','max:20'],
            'data_nascimento'=>['nullable','date'],
            'fotografia'=>['nullable','min:1', 'max:255']
        ]);
        $filme->update($atualizarFilme);
        return redirect()->route('filmes.show',[
            'id_filme'=>$filme->id_filme
        ]);
    }
    public function delete(Request $r){
        $filme=Filme::where('id_filme',$r->id_filme)->first();
        if(Gate::allows('admin')){
            if(is_null($filme)){
                return redirect()->route('filme.index')
                    ->with('msg','O filme não existe');
            }
        else
        {
            return view('filmes.delete',['filme'=>$filme]);
        }
        }
    }
    public function destroy(Request $r){
        $filme=Filme::where('id_filme', $r->id_filme)->first();
        if(is_null($filme)){
            return redirect()->route('filmes.index')->with('msg', 'Filme eliminado!');
        }
        else{
            $filme->delete();
            return redirect()->route('filmes.index')->with('msg', 'Filme eliminado!');
        }
    }
}
?>