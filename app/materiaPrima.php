<?php

namespace SICOVIMA;

use Illuminate\Database\Eloquent\Model;

class materiaPrima extends Model
{
    protected $table = 'materiaPrima';

    protected $fillable = ['nombre_MP','tipo_MP', 'color_MP','precio_MP','unidadMedida_MP'];

    public function detalleCompra(){
   return $this->hasMany('detalleCompra');


}

public function materiaPrima(){
return $this->haaMany('\SICOVIMA\materiaPrima','materiaPrima');
}

}
