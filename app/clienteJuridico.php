<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class clienteJuridico extends Model
{
    protected $table = 'clienteJuridico';
    protected $fillable = ['NIT_CJ','nombreResponsable_CJ','id_Cliente','RNC_CJ'];


public function cliente(){
   return $this->belongsTo('\SIMACOVEPAN\cliente','id_Cliente');
}
}
