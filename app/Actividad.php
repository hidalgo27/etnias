<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = "actividad";
    public function fotos()
    {
        return $this->hasMany(ActividadFoto::class, 'actividad_id');
    }
    public function precios()
    {
        return $this->hasMany(ActividadPrecio::class, 'actividad_id');
    }
    public function asociacion()
    {
        return $this->belongsTo(Asociacion::class, 'asociacion_id');
    }
    public function disponibilidad()
    {
        return $this->hasMany(ActividadDisponible::class, 'actividad_id');
    }

    public function reserva_actividad()
    {
        return $this->hasMany(ReservaActividad::class, 'actividad_id');
    }

}
