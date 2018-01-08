<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class clienteNatural extends Model
{
    protected $table = 'clienteNatural';
    protected $fillable = ['DUI_CN','id_Cliente'];


public function cliente(){
   return $this->belongsTo('\SIMACOVEPAN\cliente','id_Cliente');
}
}
