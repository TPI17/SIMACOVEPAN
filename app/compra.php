<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table = 'compra';

    protected $fillable = ['numFac_Com','fecha_Com', 'total_Com','id_Proveedor'];

    public function proveedor(){

       return $this->belongsTo('\SIMACOVEPAN\proveedor','id_Proveedor');
    }

}
