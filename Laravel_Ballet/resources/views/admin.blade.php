@extends('master-admin')

@section('title','Ballet San Agustin')

@section('pagos')
@if(count($pagos) == 0)
<div class="row datos-pagos">
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"><center><b><p>Parece ser que hoy no hay pagos pendientes :)</p></b></center>
  </div>
</div>
@else
@foreach($pagos as $pago)
<div class="row datos-pagos">
    <div class="col-md-5 col-lg-5 col-xs-6 col-sm-6">
      <b>Nombre de la niña:</b>{{ $pago->Nina->{'appat-user'} }} {{ $pago->Nina->{'apmat-user'} }} {{ $pago->Nina->{'nombre-user'} }} <br>
      <b>Tutor:</b> {{ $pago->Nina->Tutor->{'nombre-tutor'} }}<br>
      
    </div>
    <div class="col-md-3 col-lg-3 col-xs-2 col-sm-2">
      <b>Direccion:</b> {{ $pago->Nina->Tutor->{'direccion-tutor'} }}</b> <br>
      <b>Telefono:</b> {{ $pago->Nina->Tutor->{'telefono'} }}</b>
  </div>
    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><p>${{ $pago->Nina->{'pago'} }}</p></div>
    <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1">
      <form method="post" action="PagarNina/{{ $pago->Nina->{'id-user'} }}">
        {{ csrf_field() }}
        <input type="submit" value="&#x2714" class="btn btn-pagado">
      </form>
    </div>
</div>
@endforeach
@endif
@endsection

@section('pagos2')
@foreach($ninas as $nina)
<div class="row datos-pagos">
    <div class="col-md-8 col-lg-8 col-xs-7 col-sm-7">
        <b>Nombre de la niña:</b> {{ $nina->{'appat-user'} }} {{ $nina->{'apmat-user'} }} {{ $nina->{'nombre-user'} }}<br>
        <b>Tutor:</b> {{ $nina->tutor->{'nombre-tutor'} }} {{ $nina->tutor->{'appat-tutor'} }} {{ $nina->tutor->{'apmat-tutor'} }}<br>
        <b>Direccion:</b> {{ $nina->tutor->{'direccion-tutor'} }}<br>
    </div>
    <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3">
      <form method="post" action="CambiarPago/{{ $nina->{'id-user'} }}">
        {{ csrf_field() }}
          <div class="input-group">
                <span class="input-group-addon pesos-icon"><span class="glyphicon glyphicon-usd"></span></span>
                <input type="text" class="form-control pago-input" value="{{ $nina->{'pago'} }}" placeholder="Ingrese un valor" name="newpago">
                <span class="input-group-addon span-pago"><input type="submit" value="&#x2710" class="btn btn-pagado btn-cambiar-pago"></span>
          </div>                  
    </form>
    </div>
    <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1">
        <form action="BorrarNina/{{ $nina->{'id-user'} }}" method="post">
          {{ csrf_field() }}
            <input type="submit" value="&#x2718" class="btn btn-pagado btn-borrar">
        </form>
    </div>
</div>
@endforeach
@endsection

@section('botones')
<div class="container botones">
    <div class="row">
      <div class="col-md-12"> <center>{!! $ninas->render() !!}</center></div>
    </div>
  </div>
@endsection

@section('agregar-usuario')
<form class="form-horizontal" action="AgregarUsuario" method="post">
{{ csrf_field() }}
                                    <h5>Datos de la Niña</h5>
                                      <div class="form-group">
                                        <label class="control-label col-md-2">Nombre:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control" placeholder="Ingrese un nombre" name="nombrenina" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-2">Apellido Paterno:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control" placeholder="Ingrese el apellido paterno" name="apnina" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-2" >Apellido Materno:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control"  placeholder="Ingrese el apellido materno" name="amnina" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-2" >Fecha de Nacimiento:</label>
                                        <div class="col-md-4">
                                          <input type="date" class="form-control" name="birth" required>
                                        </div>
                                      </div>

                                      <h5>Datos del tutor</h5>
                                      <div class="form-group">
                                        <label class="control-label col-md-2">Nombre:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control" placeholder="Ingrese un nombre" name="nombretutor" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-2" >Apellido Paterno:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control" placeholder="Ingrese el apellido paterno" name="aptutor" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-2" >Apellido Materno:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control"  placeholder="Ingrese el apellido materno" name="amtutor" required>
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label class="control-label col-md-2" >Dirección:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control"  placeholder="Ingrese la direccion" name="directutor" required>
                                        </div>
                                      </div>
                                       <div class="form-group">
                                        <label class="control-label col-md-2" >Telefono:</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control" placeholder="Ingrese un telefono de contacto" name="telefono" required>
                                        </div>
                                      </div>

                                       <h5>Clases</h5>
                                      <div class="form-group">
                                        <label class="control-label col-md-2" for="nina">Selecciona las clases a las que vas a pertenecer</label>
                                        <div class="col-md-4">
                                          <select class="form-control" name="clasesArray[]" required multiple>
                                            @foreach($clases as $clase)
                                              <option value="{{ $clase->{'id-clase'} }}">{{ $clase->{'nombre-clase'} }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                      </div>
                                        
                                        <h5>Clases</h5>
                                        <div class="form-group">
                                        <label class="control-label col-md-2" >Pago de $</label>
                                        <div class="col-md-4">
                                          <input type="text" class="form-control"  placeholder="Monto a pagar" name="pago" required>
                                        </div>
                                    <input type="submit" value="Inscribir" class="btn btn-default btn-inscripcion">
                                </form>
@endsection

@section('cumpleanos')
  @foreach($cumple as $nina)
    <li><img src="Images/flor2.png" class="img-responsive img-list">&nbsp;

    @php
    $dia = date('d',strtotime($nina->birthday));
    @endphp

    Dia <b>{{$dia}} </b>{{ $nina->{'nombre-user'} }}

  @endforeach
@endsection

@section('fecha-hoy')

    @php
    $fecha = date('d M Y');;
    @endphp

    {{ $fecha }}

@endsection
