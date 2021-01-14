<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filme extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_filme"; 
    
    protected $table = "filmes";
    
    protected $fillable=[
        'titulo',
        'sinopse',
        'quantidade',
        'idioma'
    ];
    
    public function ator(){
        return $this->belongsTo('App\Models\Ator', 'id_ator');
    }
 public function genero(){
        return $this->belongsTo('App\Models\Genero', 'id_genero');
    }
}
?>