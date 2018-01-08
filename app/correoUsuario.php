<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class correoUsuario extends Model
{
    protected $table = 'correoUsuario';


public function usuario(){
   return $this->belongsTo('\SIMACOVEPAN\usuario','id_Usuario');
}
}
