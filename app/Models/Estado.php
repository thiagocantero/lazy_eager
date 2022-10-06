<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nome', 'uf'];
 
    public function Cidade()
    {
        return $this->hasMany(Cidade::class);
    }
}
