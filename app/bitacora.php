<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table = 'bitacora';


public function usuario(){
   return $this->belongsTo('\SIMACOVEPAN\usuario','id_Usuario');
}
}
