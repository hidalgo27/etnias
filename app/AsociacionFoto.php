<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class AsociacionFoto extends Model
{
    //
    protected $table = "asociacion_foto";
    public function asociacion()
    {
        return $this->belongsTo(Asociacion::class, 'asociacion_id');
    }
}
