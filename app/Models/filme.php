<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filme extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_filme"; 
    
    protected $table = "filmes";
    
    public function filmes(){
        return $this->hasMany('App\Models\Filmes', 'id_filme');
    
    }
}
?>