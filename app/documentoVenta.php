<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class documentoVenta extends Model
{
    protected $table = 'documentoVenta';
    protected $fillable = ['id_Venta','id_Documento'];
  public function documento(){
   return $this->belongsTo('SIMACOVEPAN\documento','id_Documento');
  }

public function venta(){
   return $this->belongsTo('venta');
}
}
