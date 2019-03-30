<?php

namespace EtniasPeru;

use Illuminate\Database\Eloquent\Model;

class TransporteFoto extends Model
{
    //
    protected $table = "transporte_foto";
    public function transporte()
    {
        return $this->belongsTo(Transporte::class, 'transporte_id');
    }
}
