<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome', 'codigo_ibge', 'estado_id'];
    
    public function Estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
