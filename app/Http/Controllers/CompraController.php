<?php

namespace SICOVIMA\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use SICOVIMA\proveedor;
use SICOVIMA\materiaPrima;
use SICOVIMA\compra;
use SICOVIMA\detalleCompra;
use Redirect;
use SICOVIMA\Http\Requests;
use SICOVIMA\Http\Controllers\Controller;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Modificar($id)
    {
      $compra = compra::find($id);
        return view("Proyecto.Desarrollo.Compras.ModificarCompra",compact('compra'));//
    }

    public function Ver()
    {
        $compra = compra::find($id);
        return view("Proyecto.Desarrollo.Compras.VerCompra",compact('compra'));
    }

    public function Registrar()
    {
        return view("Proyecto.Desarrollo.Compras.RegistrarCompras");//
    }

    public function Mostrar()
    {
      $compra = compra::with('proveedor')->get();

      $materiaPrima=\SICOVIMA\materiaPrima::all();
      $detalleCompra=detalleCompra::all();

      return view("Proyecto.Desarrollo.Compras.MostrarListadeCompras")->with('compra', $compra);//
   }

    public function Index()
    {
        $proveedores = proveedor::all();
        $materiaPrimas = \SICOVIMA\materiaPrima::all();

        return view('Proyecto.Desarrollo.Compras.RegistrarCompras',compact('proveedores','materiaPrimas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $cantidad = $request['cantidadc'];
      $id_MP = $request['idc'];
      $subTotal = $request['subTotalc'];

      $contador = count($request['cantidadc']);

     $compra =  \SICOVIMA\compra::create([
       'numFac_Com'=>$request['numFac_Com'],
       'fecha_Com'=>$request['fecha_Com'],
       'total_Com'=>$request['total_Com'],
       'id_Proveedor'=>$request['nombre_Prov'],
     ]);

       for ($j=0; $j < $contador ; $j++) {
         \SICOVIMA\detalleCompra::create([
          'cant_DCom'=>$cantidad[$j],
          'subtotal_DCom'=>$subTotal[$j],
          'id_Compra'=>$compra -> id,
          'id_MateriaPrima'=>$id_MP[$j],
         ]);

         $inventario = \SICOVIMA\inventarioMateriaPrima::where('id_MateriaPrima',$id_MP[$j])->get()->last();
         if (count($inventario) > 0) {
          $existencias_IMP = $inventario -> nuevaExistencia_IMP;
         } else {
          $existencias_IMP = 0;
         }

         \SICOVIMA\inventarioMateriaPrima::create([
           'tipoMovimiento_IMP'=>1,
           'existencias_IMP'=>$existencias_IMP,
           'cantidad_IMP'=>$cantidad[$j],
           'fechaMov_IMP'=>$request['fecha_Com'],
           'nuevaExistencia_IMP'=>$existencias_IMP + $cantidad[$j],
           'id_MateriaPrima'=>$id_MP[$j],
         ]);
       }

       $proveedores = proveedor::all();
       $materiaPrimas = \SICOVIMA\materiaPrima::all();

       return view('Proyecto.Desarrollo.Compras.RegistrarCompras',compact('proveedores','materiaPrimas'));
       //return redirect("Proyecto.Desarrollo.Compras.RegistrarCompras")->with('mensaje','¡Guardado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compra::destroy($id);
        Session::flash('message','Detalle eliminado correctamente');
        return view("Proyecto.Desarrollo.Compras.RegistrarCompras");
    }
}
