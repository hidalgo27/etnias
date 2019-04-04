<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class ActividadDisponible extends Model
{
    protected $table = "actividad_disponible";

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'actividad_id');
    }
}
