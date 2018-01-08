<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class correoProveedor extends Model
{
    protected $table = 'correoProveedor';

    protected $fillable = ['correo_CorreoProv','id_Proveedor'];

public function proveedor(){
   return $this->belongsTo('\SIMACOVEPAN\proveedor','id_Proveedor');
}
}
