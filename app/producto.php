<?php

namespace SIMACOVEPAN;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $fillable = ['tipo_Prod','estilo_Prod', 'descripcion_Prod','precio_Prod','color_Prod','talla_Prod','imagen_Prod','estado_Prod'];

    public function detallePedido(){
 	return $this->hasMany('\SIMACOVEPAN\detallePedido','id');
}

public function inventarioProductoTerminado(){
return $this->hasMany('\SIMACOVEPAN\inventarioProductoTerminado','id');
}

public function detalleProducto(){
return $this->hasMany('\SIMACOVEPAN\detallePedid','id');
}

public function detalleVenta(){
return $this->hasMany('\SIMACOVEPAN\detalleVenta','id');
}


}
