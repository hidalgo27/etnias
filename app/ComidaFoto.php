<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class ComidaFoto extends Model
{
    //
    protected $table = "comida_foto";
    public function comida()
    {
        return $this->belongsTo(Comida::class, 'comida_id');
    }
}
