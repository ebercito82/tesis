<?php
    if (empty($_GET['mensaje']))
    {
        $mensaje="";
    }
    else
    {
        $mensaje=$_GET['mensaje'];      
    }
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>       
    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="panel panel-primary">
            <div class="panel-heading">                
                <h1 class="text-center">EMSE</h1>
            </div>
            <div class="panel-body">
                <h2 class="text-center">ESCUELA MILITAR DE SARGENTOS DEL EJÉRCITO</h2>
                
            </div>
        </div>
        <h4 class="text-center content"><?php echo $mensaje;?></h3>        
        <nav class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a href="index.php" class="navbar-brand">INICIO</a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="controlador_index.php" class="dropdown-toggle" data-toggle="dropdown">INGRESAR <span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-1 row">                           
                                <li class="col-sm-4">
                                    <form action="controlador_index.php" class="form-inline" METHOD="POST">
                                        <div class="form-group">
                                            <label for="Usuario" class="col-sm-2">Usuario</label>
                                            <div class="col-xs-12">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                    <input type="text" name="usuario" class="form-control" placeholder="N° CI" required/>
                                                    <!--pattern="[0-9]{7,8}" insertar para hacerlo coorer-->
                                                </div>
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="Contraseña" class="col-sm-2">Contraseña</label>
                                            <div class="col-sm-12">
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-align-justify"></span></span>
                                                    <input type="password" name="pass" class="form-control" placeholder="Contraseña" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">Ingresar</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>

                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFORMACION<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-2 row">
                                <li class="col-sm-4">                                    
                                    <img src="img/logo.jpg" class="img-responsive">
                                    <h4 class="text-center text-danger">INTRODUCCION</h4>
                                    <p class="app-justificar text-danger">
                                        La Escuela Militar de Sargentos del Ejército se denomina “Sgto. Maximiliano Paredes Tejerina” en memoria y reconocimiento al soldado Maximiliano Paredes Tejerina muerto heroicamente en el combate de Riosinho durante la Guerra del Acre.</p>
                                    <h4 class="text-center text-danger">FECHA DE CREACIÓN Y ANIVERSARIO</h4>
                                    <p class="app-justificar text-danger">
                                        La Escuela Militar de Sargentos fue fundada en La Paz el año de 1900 y el aniversario se lo celebra el 21 de agosto como homenaje al nacimiento del Sgto. Maximiliano Paredes Tejerina.</p>
                                </li>
                                <li class="col-sm-4">
                                    <img src="img/acciones.jpg" class="img-responsive">
                                        <h4 class="text-center text-danger">ACCIONES HISTÓRICAS SOBRESALIENTES</h4>
                                        <p class="app-justificar text-danger">
                                        Participó en las siguientes acciones durante las Guerrillas de Ñancahuazú: - Acción de Tiraboy. - Acción del Pincal. - Acción de El Mezón. - Acción de La Overa. - En toda la Operación Cinthia. - La Manga y el Platanal. - Acción de Yoquira - Emboscada de Vado Yeso.</p>                                    
                                </li>
                                <li class="col-sm-4">
                                    <img src="img/mision.jpg" class="img-responsive">
                                        <h4 class="text-center text-danger">MISIÓN</h4>
                                        <p class="app-justificar text-danger">
                                        La Escuela Militar de Sargentos del Ejército, forma profesionales con el grado de sargentos iníciales y título académico de técnico superior en ciencia y arte militar terrestre, con el propósito de contar con instructores y conductores de unidades a nivel Escuadra, con valores cívico - morales y elevada capacidad táctica - técnica y contribuir al cumplimiento de la misión constitucional del Ejército y la Patria toda.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ENLACES<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-3 row">
                                <li class="col-sm-6">
                                    <div class="carousel slide" id="mislider" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="img/ministerio.jpg">
                                            </div>
                                            <div class="item">
                                                <img src="img/ejercito.jpg">
                                            </div>
                                            <div class="item">
                                                <img src="img/emi.jpg">
                                            </div>
                                            <div class="item">
                                                <img src="img/cossmil.jpg">
                                            </div>
                                            <div class="item">
                                                <img src="img/historia.jpg">
                                            </div>
                                        </div>                                        
                                    </div>                                    
                                </li>
                                <li class="col-sm-6">                                    
                                    <div class="list-group" align="center">
                                        <ol class="breadcrumb">
                                        <a href="http://www.mindef.gob.bo/mindef/inicio" class="list-group-item" target="_blank">MINISTERIO DE DEFENSA</a>
                                        </ol>
                                        <ol class="breadcrumb">
                                        <a href="http://www.ejercito.mil.bo" class="list-group-item" target="_blank">EJERCITO DE BOLIVIA</a>
                                        </ol>
                                        <ol class="breadcrumb">
                                        <a href="http://www.emi.edu.bo" class="list-group-item" target="_blank">ESCUELA MILITAR DE INGENIERIA</a>
                                        </ol>
                                        <ol class="breadcrumb">
                                        <a href="http://www.cossmil.mil.bo" class="list-group-item" target="_blank">COSSMIL</a>
                                        </ol>
                                        <ol class="breadcrumb">
                                        <a href="http://abhm26.wix.com/abhm" class="list-group-item" target="_blank">ACADEMIA BOLIVIANA DE HISTORIA</a>
                                        </ol>
                                    </div>                                    
                                </li>
                            </ul>
                        </li>
                    </ul>                    
                </div>
            </div>
        </nav>        
            <div id="carousel" class="carousel slide" data-ride="carousel" align="center">
        <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    <li data-target="#carousel" data-slide-to="5"></li>                    
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-thumbnail" src="img/uno.jpg">                        
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="img/dos.jpg">                        
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="img/tres.jpg">                        
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="img/cuatro.jpg">                        
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="img/cinco.jpg">                        
                    </div>
                    <div class="item">
                        <img class="img-thumbnail" src="img/seis.jpg">                        
                    </div>
                </div>
                    <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <script>
                $(document).ready(function(){
                $('.carousel').carousel({
                interval: 100,
                });
            });
            </script>     
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>