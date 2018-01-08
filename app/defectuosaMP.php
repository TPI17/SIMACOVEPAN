<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class defectuosaMP extends Model
{
    protected $table = 'defectuosaMP';

public function inventarioMateriaPrima(){
   return $this->belongsTo('inventarioMateriaPrima');
}
}
