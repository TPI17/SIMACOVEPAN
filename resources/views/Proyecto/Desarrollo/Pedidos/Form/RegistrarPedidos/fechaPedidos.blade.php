<div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Pedido</h5>
                </div>
                <div class="ibox-content">


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" id="data_2">
                                <label class="font-bold">Fecha de Entrega</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    {!! Form::text('fechaEntregar_Ped', '2017-11-21',['class' =>'form-control']) !!}

                                </div>
                            </div>
                         </div>


                         <div class="col-md-3">
                            <div class="form-group" id="data_2">
                                <label class="font-bold">Fecha Estimada con Antipación</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    {!! Form::text('fechaRecibir_Ped', '2017-11-20',['class' =>'form-control']) !!}

                                </div>
                            </div>

                         </div>


                         <div class="col-sm-2">
                            <label class="font-bold">Anticipo</label>

                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('anticipo_Ped',21,['class'=>'touchspin2 form-control','step'=>'any']) !!}

                        </div>

                         </div>


                        <div class="col-md-2">

                            <label class="font-bold">Documento</label>
                            <div class="input-group bootstrap-touchspin">
                            {!! Form::select('tipo_Doc', ['0' => 'Seleccionar','1' => 'Factura', '2' => 'Recibo'],'' ,['class' => 'form-control m-b']) !!}

                            </div>
                        </div>
                        <div class="col-md-2">
                         <label class="font-bold">              </label>
                            <div class="input-group bootstrap-touchspin">
                                {!! Form::submit('Generar',['class'=>'btn btn-outline btn-primary dim']) !!}

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
