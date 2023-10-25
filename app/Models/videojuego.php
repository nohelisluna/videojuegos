<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videojuego extends Model
{
    use HasFactory;
    
    public function categoria(){
        return $this->belongsTo('categorias','id');
    }

    public function plataforma(){
        return $this->belongsTo('plataformas','id');
    }

    public function user(){
        return $this->belongsTo('users','id');
    }
}
