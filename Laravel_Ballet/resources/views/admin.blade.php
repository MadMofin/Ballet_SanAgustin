@extends('master-admin')

@section('title','Ballet San Agustin')

@section('pagos')
<div class="row datos-pagos">
    <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1 visible-md-inline visible-lg-inline">1641957</div>
    <div class="col-md-5 col-lg-5 col-xs-6 col-sm-6">
    	<p><b>Nombre de la niña:</b> nombre niña</p>
    	<p><b>Tutor:</b> Nombre tutor</p>
    	<p><b>Direccion:</b> Direccion niña</p>
    </div>
    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><b><p>Clases: </b>Ballet, Jazz, HipHop</p></div>
    <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><p>$1400</p></div>
    <div class="col-md-1 col-lg-1 col-xs-1 col-sm-1">
    	<form>
    		<input type="submit" value="&#x2714" class="btn btn-pagado">
    	</form>
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