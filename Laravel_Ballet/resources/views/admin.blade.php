<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ballet San Agustin</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="StyleBallet.css">

    </head>
    <body class="background">
     
    <img src="Images/logo.png" class="main-logo">

    <nav class="navbar navbar-fixed-top navbar-inverse my-nav">
          <div class="container-fluid">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a data-toggle="modal" data-target="#InscribirModal">Inscribir</a></li>
                  <li><a data-toggle="modal" data-target="#CumpleañosModal">Cumpleaños</a></li>
                </ul>
            </div>
          </div>
        </nav>
        <br><br><br><br>
        <div class="container pagos">
        	<div class="row">
        		<center><h2>Pagos de hoy 9 de Julio 2018</h2></center>
        		<div class="col-md-1 col-lg-1 visible-md-inline visible-lg-inline"><b>Matricula</b></div>
        		<div class="col-md-5 col-lg-5 col-xs-6 col-sm-6"><b>Datos</b></div>
        		<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><b>Clases</b></div>
        		<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><b>$$$$</b></div>
        	</div>

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



        </div>	

        <div id="InscribirModal" class="modal fade" role="dialog">
                <div class="modal-dialog my-modal-dialog">
                <div class="modal-content my-modal-content">
                    <div class="modal-header my-modal-header"><center>
                          <div class="row">      
                          <div class="col-md-11 Modal-Text">
                          <h1>Inscripción</h1>
                          </div>
                          <div class="col-md-1">
                              <button type="button" class="close my-close" data-dismiss="modal"> &times;
                        </button>
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body my-modal-body">
                     
                        <div class="container Inscripcion">
                            <div class="row">

                            	<img src="Images/bailarina.png" class="img-responsive img-ins visible-lg-inline visible-md-inline">

                                <form class="form-horizontal" action="#">

                                	<h5>Datos de la Niña</h5>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Nombre:</label>
									    <div class="col-md-4">
									      <input type="text" class="form-control" id="nina" placeholder="Ingrese un nombre">
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Apellido Paterno:</label>
									    <div class="col-md-4">
									      <input type="text" class="form-control" id="nina" placeholder="Ingrese un nombre">
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Apellido Materno:</label>
									    <div class="col-md-4">
									      <input type="text" class="form-control" id="nina" placeholder="Ingrese un nombre">
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Fecha de Nacimiento:</label>
									    <div class="col-md-4">
									      <input type="date" class="form-control" id="nina">
									    </div>
									  </div>

									  <h5>Datos del tutor</h5>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Nombre:</label>
									    <div class="col-md-4">
									      <input type="text" class="form-control" id="nina" placeholder="Ingrese un nombre">
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Apellido Paterno:</label>
									    <div class="col-md-4">
									      <input type="text" class="form-control" id="nina" placeholder="Ingrese un nombre">
									    </div>
									  </div>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Apellido Materno:</label>
									    <div class="col-md-4">
									      <input type="text" class="form-control" id="nina" placeholder="Ingrese un nombre">
									    </div>
									  </div>

									   <h5>Clases</h5>
									  <div class="form-group">
									    <label class="control-label col-md-2" for="nina">Selecciona las clases a las que vas a pertenecer</label>
									    <div class="col-md-4">
									      <select class="form-control" multiple size="7">
											  <option value="volvo">Ballet</option>
											  <option value="saab">Belly</option>
											  <option value="mercedes">Hip Hop</option>
											  <option value="audi">Jazz</option>
											  <option value="audi">Competencia</option>
											  <option value="audi">Hawaiano</option>
											  <option value="audi">Gimnasia</option>
											</select>
									    </div>
									  </div>
									
									<input type="submit" value="Inscribir" class="btn btn-default btn-inscripcion">
								</form>

                            </div>
                        </div>

                    </div>                  
                </div>
                </div>
            </div>


        <div id="CumpleañosModal" class="modal fade" role="dialog">
                <div class="modal-dialog my-modal-dialog">
                <div class="modal-content">
                    <div class="modal-header my-modal-header"><center>
                          <div class="row">      
                          <div class="col-md-11 Modal-Text">
                          <h1>¡Feliz Cumpleaños!</h1>
                          </div>
                          <div class="col-md-1">
                              <button type="button" class="close my-close" data-dismiss="modal"> &times;
                        </button>
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body my-modal-body">
                     
                        <div class="container Inscripcion">
                            <div class="row">
                            	<div class="col-md-5">
                            		<h2 class="text-birth">Estas son las niñas que cumplen años este mes!</h2><br>
                            		<ul class="list-birth">
                            			<li><img src="Images/flor2.png" class="img-responsive img-list">&nbsp;Nombre <b>9</b> de Julio</li>
                            			<li><img src="Images/flor2.png" class="img-responsive img-list">&nbsp;Nombre <b>9</b> de Julio</li>
                            			<li><img src="Images/flor2.png" class="img-responsive img-list">&nbsp;Nombre <b>9</b> de Julio</li>
                            			<li><img src="Images/flor2.png" class="img-responsive img-list">&nbsp;Nombre <b>9</b> de Julio</li>
                            			<li><img src="Images/flor2.png" class="img-responsive img-list">&nbsp;Nombre <b>9</b> de Julio</li>
                            		</ul>
                            	</div>
                            	<div class="col-md-4">
                            	<img src="Images/cake.png" class="img-responsive img-cake">
                            </div>
                              
                            </div>
                        </div>

                    </div>                  
                </div>
                </div>
            </div>

        <br><br><br><br><br>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>
