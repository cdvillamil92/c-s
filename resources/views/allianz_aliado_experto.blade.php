@extends('layouts.app')

@section('content-form')
<div class="row m-0">
    <div class="col-lg-7 section-left">
        <div class="col-lg-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="content">
                            <div class="section-header">
                                <h4 class="section-title"><strong>Allianz es el aliado experto</strong></h4>
                                <p>Para ofrecerte el respaldo necesario para cuidar a los que amas, tu salud y tu patrimonio..</p>
                                <p>Selecciona los productos que quieres cotizar</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    {{ Form::open(array('url' => 'foo/bar')) }}
                                    {{ Form::text('id_tomador') }}
                                    <div class="border input-group">
                                        <div class="custom-control custom-checkbox input-group-prepend">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="">
                                            <div class="">@</div>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 section-right">
        <div class="">
            <div>
                <img src="{{ asset('img/salud.jpg') }}" class="w-100" alt="alt text">
            </div>
            <div class="services-item bg-salud">
                <h5><strong>Seguro de Salud</strong></h5>
                <p><span class="glyphicon glyphicon-ok"></span>Acceso directo a todas las especialidades.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Puedes hacer uso de nuestra red de más de 4.100 médicos, laboratorios e instituciones médicas disponibles en todo el país.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Asistencia médica en el exterior: Cobertura internacional desde 60 a 180 días.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Terapias físicas sin copago.<br>
                En maternidad cuentas con citas y ecografías sin límite, libre elección de clínica para el parto, y el menor periodo de carencia para cobertura de embarazo en todos los planes de salud privada.</p>
                <p><span class="glyphicon glyphicon-ok"></span>Aseguradora <strong>#1</strong> de satisfacción en clientes.</p>
            </div>
        </div>
    </div>
</div>




<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8">
            <div class="content">
                <div class="section-header">
                    <h4 class="section-title"><strong>Allianz es el aliado experto</strong></h4>
                    <p>Para ofrecerte el respaldo necesario para cuidar a los que amas, tu salud y tu patrimonio..</p>
                    <p>Selecciona los productos que quieres cotizar</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        {{ Form::open(array('url' => 'foo/bar')) }}
                        <div class="border input-group">
                            <div class="custom-control custom-checkbox input-group-prepend">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                            </div>
                            <div class="">
                                <div class="">@</div>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection