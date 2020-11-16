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
        
        $ator= Ator::where('id_ator',$idator)->first();
        
        return view ('atores.show', [
            'ator'=> $ator
        ]);
    }
}
?>