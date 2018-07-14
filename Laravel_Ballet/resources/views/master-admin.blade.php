<!doctype html>
<html class="background2">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="StyleBallet.css">

    </head>
    <body class="background2">

       <div id="CumpleanosModal" class="modal fade" role="dialog">
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

                                 @yield('cumpleanos')
                                 
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
                  <li><a data-toggle="modal" data-target="#CumpleanosModal">Cumpleaños</a></li>
                </ul>
            </div>
          </div>
        </nav>

        <br><br><br><br>
        <div class="container pagos">
        	<div class="row">
        		<center><h2>Pagos de hoy @yield('fecha-hoy')</h2></center>
        		<div class="col-md-5 col-lg-5 col-xs-6 col-sm-6"><b>Datos</b></div>
        		<div class="col-md-3 col-lg-3 col-xs-2 col-sm-2"><b>Contacto</b></div>
        		<div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><b>$$$$</b></div>
        	</div>

        	@yield('pagos')

        </div>	
<br><br><center>
        <div class="container busqueda">
          <div class="row">
            <form class="form-inline">

              <div class="form-group col-md-2 col-md-offset-3 col-lg-2 col-lg-offset-3 col-xs-2 col-sm-2 col-xs-offset-3 col-sm-offset-3">
                <select class="form-control" name="type" required>
                   <option value="1">Nombre</option>
                   <option value="2">Apellido Paterno</option>
                   <option value="3">Apellido Materno</option>
                 </select>
              </div>

              <div class="form-group col-md-2 col-lg-2 col-xs-2 col-sm-2">
                <input type="text" class="form-control" placeholder="Ingrese su busqueda">
              </div>

              <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-search "></span></button>
              </div> 
              

            </form>
          </div>
        </div></center>
<br><br>
        <div class="container pagos pagos2">
            <div class="row"><center><h2>Lista de Niñas Completa</h2></center>
            <div class="col-md-8 col-lg-8 col-xs-7 col-sm-7"><b>Datos</b></div>
            <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"><b>$$$$</b></div>
            <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2"><b>Dar de baja</b></div>
          </div>

          @yield('pagos2')

        </div>  

        <br>
        @yield('botones')

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

                                @yield('agregar-usuario')

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
