<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class detalleProducto extends Model
{
    protected $table = 'detalleProducto';


  public function producto(){
   return $this->belongsTo('\SIMACOVEPAN\producto','id_Producto');
  }

public function inventarioMateriaPrima(){
   return $this->belongsTo('\SIMACOVEPAN\inventarioMateriaPrima','id_InventarioMP');
}
}
