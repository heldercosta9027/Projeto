<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ator extends Model
{
    use HasFactory;
    
    protected $primaryKey="id_ator"; 
    
    protected $table = "atores";
    
    public function autores(){
        return $this->hasMany('App\Models\Atores', 'id_ator');
    
    }
}
?>