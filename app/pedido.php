<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'pedido';

    protected $fillable = ['fecha_Ped','total_Ped', 'anticipo_Ped','fechaRecibir_Ped','fechaEntregar_Ped','id_Cliente'];

public function cliente(){
   return $this->belongsTo('\SIMACOVEPAN\cliente','id_Cliente');
}
}
