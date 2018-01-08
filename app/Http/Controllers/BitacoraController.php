<?php

namespace SIMACOVEPAN\Http\Controllers;

use Illuminate\Http\Request;

use SIMACOVEPAN\Http\Requests;
use SIMACOVEPAN\Http\Controllers\Controller;
use SIMACOVEPAN\departamento;
use SIMACOVEPAN\municipio;
use SIMACOVEPAN\cliente;
use SIMACOVEPAN\clienteJuridico;
use SIMACOVEPAN\clienteNatural;
use SIMACOVEPAN\correoCliente;
use SIMACOVEPAN\telefonoCliente;

class BitacoraController extends Controller
{
    public function index()
    {
        return view("Proyecto.Desarrollo.Seguridad.Bitacora");
    
    }
    
    public function Mostrar()
    {
    
    }

    public function create()
    {
      return view("Proyecto.Desarrollo.Seguridad.Bitacora");
    }

    public function Ver()
    {
     return view("Proyecto.Desarrollo.Seguridad.Bitacora");
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
