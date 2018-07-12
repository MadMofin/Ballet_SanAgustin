<!doctype html>
<html>
    <head>
       <meta charset="utf-8">
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
                  <li><a data-toggle="modal" data-target="#AdminModal">Administrar</a></li>
                  <li><a data-toggle="modal" data-target="#HorarioModal">Horarios</a></li>
                  <li><a data-toggle="modal" data-target="#PreciosModal">Precios</a></li>
                </ul>
            </div>
          </div>
        </nav>

        <div id="AdminModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button><br><br>
                          <div class="row">      
                          <div class="col-sm-12">
                          <h4>Centro de Administración</h4>
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body">
                      <form action="/action_page.php">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-3">
                                      <label class="form-label">Usuario: </label>
                                      <input type="text" name="user" placeholder="Ingresa tu usuario"  class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                      <label class="form-label">Contraseña: </label>
                                      <input type="text" name="pass" placeholder="Ingresa tu contraseña" class="form-control">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                     <center><input type="submit" value="Ingresar" class="btn btn-default btn-pagado btn-admin"></center>
                                  </div>
                              </div>
                          </div>
                        </form>
                    </div>                  
                </div>
                </div>
            </div>

            <div id="HorarioModal" class="modal fade" role="dialog">
                <div class="modal-dialog my-modal-dialog">
                <div class="modal-content my-modal-content">
                    <div class="modal-header my-modal-header"><center>
                        <button type="button" class="close" data-dismiss="modal"> &times;</button>
                          <div class="row">      
                          <div class="col-sm-12 Modal-Text">
                          <h1>Horarios</h1>
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body my-modal-body">
                      <center>
                       
                            <div class="container horario visible-lg-inline visible-md-inline">
                                <div class="row">
                                    <div class="col-md-1 col-lg-1 horario-day">
                                  
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-day">
                                    Lunes
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-day">
                                    Martes
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-day">
                                    Miercoles
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-day">
                                    Jueves
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-day">
                                    Viernes
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-day">
                                    Sabado
                                    </div>
                                  
                                </div>

                                <div class="row">
                                    <div class="col-md-1 col-lg-1 horario-hour">
                                    4:00pm - 5:00pm
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Ballet
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Jazz
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Ballet
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Hawaiano
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Street Dance <br> <b><p class="bot-text">BOYS - GIRLS</p></b>
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-yellow">
                                    Ballet <br> 9:00 am
                                    </div>
                                    <div class="col-md-2 visible-md-inline visible-lg-inline">
                                        <br><span class="glyphicon glyphicon-stop Nomenclatura-pink"></span>
                                        <p class="text-nomenclatura">Baby 2 a 5 años</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 col-lg-1 horario-hour">
                                    5:00pm - 6:00pm
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green">
                                    Ballet
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green">
                                    Stretch
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Belly
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Gimnasia
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-lemon">
                                    Competen.<br> <b><p class="bot-text">TODAS LAS EDADES</p></b>
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-yellow">
                                    Jazz <br> 10:00 am
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                    <br><span class="glyphicon glyphicon-stop Nomenclatura-green"></span>
                                        <p class="text-nomenclatura">Junior 6 a 9 años</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 col-lg-1 horario-hour">
                                    6:00pm - 7:00pm
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green">
                                    HipHop <br><b> <p class="bot-text">BOYS - GIRLS</p></b>
                                    </div>
                                    <div class="col-md-1 col-lg-1  horario-green">
                                    Jazz
                                    </div>
                                    <div class="col-md-1 col-lg-1  horario-green-purple">
                                    Belly <br> <b><p class="bot-text">MIXTA</p></b>
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green">
                                    Gimnasia
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green-purple">
                                    Contempor. <br><b><p class="bot-text">MIXTA</p></b>
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Ballet <br> 11:00 am
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                    <br><span class="glyphicon glyphicon-stop Nomenclatura-purple"></span>
                                        <p class="text-nomenclatura">Teens 10 a 16 años</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-1 col-lg-1  horario-hour">
                                    7:00pm - 8:00pm
                                    </div>
                                    <div class="col-md-1 col-lg-1  horario-green-purple">
                                    HipHop <br> <b><p class="bot-text">BOYS-GIRLS</p></b>
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-purple">
                                    Jazz
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-purple">
                                    Ballet
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-purple">
                                    Stretch
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-purple">
                                    Gimnasia
                                    </div>
                                     <div class="col-md-1 col-lg-1">
                                    
                                    </div>
                                    <div class="col-md-2 col-lg-2">
                                     <br><span class="glyphicon glyphicon-stop Nomenclatura-yellow"></span>
                                       <p class="text-nomenclatura"> Sabatinas 5 a 9 años</p>
                                    </div>
                                    </div>  

                                     <div class="row">
                                    <div class="col-md-1 col-lg-1 horario-hour">
                                    8:00pm - 9:00pm
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green-purple">
                                    Danza aerea
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Jazz
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-pink">
                                    Ballet
                                    </div>
                                    <div class="col-md-1 col-lg-1 horario-green-purple">
                                    Danza aerea
                                    </div>
                                     <div class="col-md-4 col-lg-4">
                                    
                                    </div>
                            
                                    </div>        

                                </div>





                                <div class="container horario visible-xs-inline visible-sm-inline">
                                <div class="row">
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                  
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                    Lun
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                    Mart
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                    Mie
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                    Jue
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                    Vie
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-day">
                                    Sab
                                    </div>
                                  
                                </div>

                                <div class="row">
                                    <div class="col-xs-1 col-sm-1 horario-hour">
                                    4-5pm
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Bal
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Jazz
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Bal
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Haw
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    StD (B-G)
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-yellow">
                                    Bal (9am)
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1 col-sm-1 horario-hour">
                                    5-6pm
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green">
                                    Bal
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green">
                                    Str
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Bel
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Gim
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-lemon">
                                    Comp (TLE)
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-yellow">
                                    Jazz (10am)
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1 col-sm-1 horario-hour">
                                    6-7pm
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green">
                                    Hip (B-G)
                                    </div>
                                    <div class="col-xs-1 col-sm-1  horario-green">
                                    Jazz
                                    </div>
                                    <div class="col-xs-1 col-sm-1  horario-green-purple">
                                    Bel (Mix)
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green">
                                    Gimn
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green-purple">
                                    Cont (Mix)
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Bal (11am)
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-1 col-sm-1  horario-hour">
                                    7-8pm
                                    </div>
                                    <div class="col-xs-1 col-sm-1  horario-green-purple">
                                    Hip (B-G)
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-purple">
                                    Jazz
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-purple">
                                    Bal
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-purple">
                                    Str
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-purple">
                                    Gimn
                                    </div>
                                     <div class="col-xs-1 col-sm-1">
                                    
                                    </div>
                                    </div>  

                                     <div class="row">
                                    <div class="col-xs-1 col-sm-1 horario-hour">
                                    8-9pm
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green-purple">
                                    Da A
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Jazz
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-pink">
                                    Bal
                                    </div>
                                    <div class="col-xs-1 col-sm-1 horario-green-purple">
                                    Da A
                                    </div>
                                     <div class="col-xs-4 col-sm-4">
                                    
                                    </div>
                            
                                    </div>        

                                    <div class="row">
                                    <div class="col-xs-3 col-sm-3">
                                        <span class="glyphicon glyphicon-stop Nomenclatura-pink"></span>
                                        <p class="text-nomenclatura">Baby 2-5</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                        <span class="glyphicon glyphicon-stop Nomenclatura-green"></span>
                                        <p class="text-nomenclatura">Junior 6-9</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 cel-nom">
                                        Bal: Ballet <br>
                                        Haw: Hawaiano <br>
                                        StD: St. Dance <br>
                                        Str: Stretch<br>
                                        Gim: Gimnasia<br>
                                        Bel: Belly<br>
                                        Da A: D. Aerea<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-3">
                                        <span class="glyphicon glyphicon-stop Nomenclatura-purple"></span>
                                        <p class="text-nomenclatura">Teens 10-16</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                        <span class="glyphicon glyphicon-stop Nomenclatura-yellow"></span>
                                        <p class="text-nomenclatura">Sabatinas 5-9</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 cel-nom">
                                        Com: Competen. <br>
                                        Hip: Hiphop <br>
                                        B-G: BoysGirls <br>
                                        TLE: Cual. Edad<br>
                                        Mix: Mixta<br>
                                    </div>
                                </div>

                                </div>
                      </center>
                    </div>                  
                </div>
                </div>
            </div>

            <div id="PreciosModal" class="modal fade" role="dialog">
                <div class="modal-dialog my-modal-dialog">
                <div class="modal-content my-modal-content">
                    <div class="modal-header my-modal-header"><center>
                          <div class="row">      
                          <div class="col-md-11 Modal-Text">
                          <h1>Costos</h1>
                          </div>
                          <div class="col-md-1">
                              <button type="button" class="close my-close" data-dismiss="modal"> &times;
                        </button>
                          </div>
                          </div></center>
                    </div>
                    <div class="modal-body my-modal-body">
                     
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <img src="Images/image1.jpg" class="img-responsive img-thumbnail center-block">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <h3>Nuestros costos:</h3>
                                     <p><b>2</b> clases a la semana <b>$600</b> el mes </p>
                                     <p><b>3</b> clases a la semana <b>$650</b> el mes </p>
                                     <p><b>4</b> clases a la semana <b>$700</b> el mes </p>
                                     <p><b>5</b> clases a la semana <b>$750</b> el mes </p>
                                     <p><b>6</b> clases a la semana <b>$850</b> el mes </p>
                                     <b>Todas las clases $950 el mes </b> <p></p>

                                     <h3>Precio hermanas: </h3>
                                     <p><b>2</b> clases a la semana <b>$950</b> el mes </p>
                                     <p><b>3</b> clases a la semana <b>$1,100</b> el mes </p>
                                     <p><b>4</b> clases a la semana <b>$1,250</b> el mes </p>
                                     <p><b>5</b> clases a la semana <b>$1,400</b> el mes </p>
                                     <p><b>6</b> clases a la semana <b>$1,500</b> el mes </p>
                                     <b>Todas las clases $1,650 el mes </b>
                                     <br><br>
                                     <h4 class="visible-md-inline visible-lg-inline">¡Precio por las 2 al mes!</h4>
                                     <center class="visible-xs-inline visible-sm-inline"><h4>¡Precio por las 2 al mes!</h4></center>
                                </div>
                            </div>
                        </div>

                    </div>                  
                </div>
                </div>
            </div>

    <br><br><br><br><br>

    <div class="container article">
        <div class="row">
            <div class="col-md-12">
                <center><img src="Images/marco.png" class="img-responsive img-marco"><h4>Los grandes bailarines no son geniales debido a su técnica, ellos son geniales debido a su pasión.</h4></center>
                <sub>-Martha Graham</sub>
            </div>
        </div>
    </div>

     <div class="container article">
        <div class="row">
            <div class="col-md-4">
                <h1>Ballet</h1><img src="Images/ballet.jpg" class="img-responsive center-block img-article">
            </div>
             <div class="col-md-8 texto-article"> 
               <p> texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>
            </div>
        </div>
    </div>

    <div class="container article">
        <div class="row">      
             <div class="col-md-8 texto-article"><h1 class="visible-xs-inline visible-sm-inline">Jazz</h1>
               <p> texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>
            </div>
             <div class="col-md-4">
                <h1 class="visible-md-inline visible-lg-inline">Jazz</h1><img src="Images/jazz.jpg" class="img-responsive center-block img-article">
            </div>
        </div>
    </div>

    <div class="container article">
        <div class="row">
            <div class="col-md-4">
                <h1>Hawaiiano</h1><img src="Images/hawai.jpg" class="img-responsive center-block img-article">
            </div>
             <div class="col-md-8 texto-article"> 
               <p> texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>
            </div>
        </div>
    </div>

    <div class="container article">
        <div class="row">
             <div class="col-md-8 texto-article"> <h1 class="visible-xs-inline visible-sm-inline">Belly</h1>
               <p> texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>
            </div>
            <div class="col-md-4">
                 <h1 class="visible-md-inline visible-lg-inline">Belly</h1><img src="Images/belly.jpg" class="img-responsive center-block img-article">
            </div>
        </div>
    </div>

    <div class="container article">
        <div class="row">
            <div class="col-md-4">
                <h1>Gimnasia</h1><img src="Images/gimnasia.jpg" class="img-responsive center-block img-article">
            </div>
             <div class="col-md-8 texto-article">
               <p> texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>
            </div>
        </div>
    </div>
  
    <div class="container article">
        <div class="row">       
             <div class="col-md-8 texto-article"><h1 class="visible-xs-inline visible-sm-inline">Hip Hop</h1>
               <p> texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto </p>
            </div> 
            <div class="col-md-4"><h1 class="visible-md-inline visible-lg-inline">Hip Hop</h1>
                <img src="Images/hiphop.jpg" class="img-responsive center-block img-article">
            </div>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="container-fluid about-us">
        <div class="row">
            <div class="col-md-4">
                <h3>Acerca de Nosotros</h3>     <p>
                    Somos una academia de danza que cuenta con diferentes técnicas, en donde nuestras alumnas escogen la que más sea su estilo .
                </p>       
                 <h4>Direccion</h4>
                <p>
                    Ave. Raul Salinas y Ave. Union
                    General Escobedo, Nuevo Leon, Mexico
                </p>
            </div>
            <div class="col-md-4">
            
            </div>
            <div class="col-md-4">
                <h3>Contactos</h3> 
                <a href="https://www.facebook.com/balletsanagustiin/" target="_blank">
                    <img src="Images/fb.png" class="img-resposive img-fb"><p>&nbsp; Ballet San Agustín</p>
                </a>  <br><br>           
                    <img src="Images/telefono.png" class="img-resposive img-tel"><p>&nbsp; Teléfono: 8119908921</p>

            </div>
        </div>
        <br>
    </div>


    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>
