<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_genero"; 
    
    protected $table = "generos";
    
    protected $fillable=[
        'designacao',
        'observacoes'
    ];
    
    public function filmes(){
        return $this->hasMany('App\Models\Filme', 'id_genero');
    
    }
}
?>