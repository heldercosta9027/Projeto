<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ator extends Model
{
    use HasFactory;
    protected $primaryKey="id_ator";
    protected $table = "atores";
    
    protected $fillable=[
        'nome',
        'nacionalidade',
        'data_nascimento',
        'fotografia',
        'id_ator'
    ];
    
    public function filmes(){
        return $this->hasMany('App\Models\Filme', 'id_ator');  
    }
    public function users(){
        return $this->belongsTo('App\Models\User','id_user');
    }
}
?>