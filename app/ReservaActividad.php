<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class ReservaActividad extends Model
{
    //
    protected $table = "reserva_actividad";
    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'reserva_id');
    }
    public function asociacion()
    {
        return $this->belongsTo(Asociacion::class, 'asociacion_id');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'actividad_id');
    }
}
