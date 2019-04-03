<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class ComunidadFoto extends Model
{
    //
    protected $table = "comunidad_foto";
    public function comunidad()
    {
        return $this->belongsTo(Comunidad::class, 'comunidad_id');
    }
}
