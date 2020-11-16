<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_genero"; 
    
    protected $table = "generos";
    
    public function generos(){
        return $this->hasMany('App\Models\Generos', 'id_genero');
    
    }
}
?>