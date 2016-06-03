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

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <datalist id="grado_al">
            <option value="AL 1ER AM">
            <option value="AL 2DO AM">
            <option value="AL 3ER AM">                                                    
        </datalist>

        <div class="panel panel-primary">
            <div class="panel-heading">                
                <h1 class="text-center">PLANIFICACION</h1>
            </div>
            <div class="panel-body">
                <h2 class="text-center"></h2>
                
            </div>
        </div>
        
        
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MATERIA<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-1 row">                           
                                <li class="col-sm-12">
                                    <form action="materia.php" class="form-inline" role="form" METHOD="POST">
                                        <div class="form-group">
                                            <label for="ci" class="col-sm-1 text-danger">MODULO</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="modulo" class="form-control" required/>
                                                    <!--pattern="[0-9]{7,8}" insertar para hacerlo coorer-->
                                            </div>    
                                        </div>
                                        <div class="form-group">
                                            <label for="materias" class="col-sm-10 text-danger">N° DE MATERIAS</label>
                                            <div class="col-lg-12">                                                       
                                                    <input type="text" name="cantidad" class="form-control" required/>
                                                    <!--pattern="[0-9]{7,8}" insertar para hacerlo coorer-->
                                            </div>    
                                        </div>   
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">CONTINUAR</button>
                                            </div>
                                        </div>
                                    </form>
                                                                
                                </li>
                            </ul>

                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CURSOS<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-2 row">                           
                                <li class="col-sm-4">
                                    <form action="controlador_personal.php" class="form-inline" METHOD="POST">
                                        <div class="form-group">
                                            <label for="Usuario" class="col-sm-2">CURSO</label>
                                            <div class="col-xs-12">
                                                <div class="input-group input-group-md">                                                    
                                                    <input type="text" name="curso" list="grado_al" class="form-control" REQUIRED/>
                                                </div>
                                            </div>                                       
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">CONTINUAR</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>                         
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">DOCENTES<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-4 row">                           
                                <li class="col-sm-12">
                                    <form action="controlador_registrar_alumno.php" class="form-inline" role="form" METHOD="POST">
                                        <div class="form-group">
                                            <label for="ci" class="col-sm-1 text-danger">CI</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="ci" class="form-control" required/>                                                
                                                    <!--pattern="[0-9]{7,8}" insertar para hacerlo coorer-->
                                            </div>  
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">CONTINUAR</button>
                                            </div>
                                        </div>
                                    </form>
                                                                
                                </li>
                            </ul>

                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESTUDIANTES<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-5 row">                           
                                <li class="col-sm-4">
                                    <form action="controlador_modificar_alumno.php" class="form-inline" METHOD="POST">
                                        <div class="form-group">
                                            <label for="Usuario" class="col-sm-2">CI</label>
                                            <div class="col-xs-12">
                                                <div class="input-group input-group-md">                                                    
                                                    <input type="text" name="ci" class="form-control" placeholder="12345677" REQUIRED/>
                                                </div>
                                            </div>                                       
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">CONTINUAR</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>                         
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="../index.php" class="navbar-brand">SALIR</a>                                               
                        </li>                                             
                    </ul>                    
                </div>
            </div>
        </nav>        
        <h2 class="text-center content"><?php echo $mensaje;?></h2> 

        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>