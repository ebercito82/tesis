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
        <div class="panel panel-primary">
            <div class="panel-heading">                
                <h1 class="text-center">ADMINISTRADOR</h1>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTRAR<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-1 row">                           
                                <li class="col-sm-12">
                                    <form action="controlador_registrar.php" class="form-inline" role="form" METHOD="POST">
                                        <div class="form-group">
                                            <label for="ci" class="col-sm-1 text-danger">CI</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="ci" class="form-control" required/>                                                
                                                    <!--pattern="[0-9]{7,8}" insertar para hacerlo coorer-->
                                            </div>    
                                        </div>
                                        <div class="form-group">
                                            <label for="ci" class="col-sm-12 text-danger">GRADO</label>
                                            <div class="col-lg-12">
                                                <input type="text" name="grado" class="form-control" list="grado" required/>                                                
                                                <datalist id="grado">
                                                    <option value="GRAL">
                                                    <option value="CNL">
                                                    <option value="TCNL">
                                                    <option value="MY"> 
                                                    <option value="CAP">    
                                                    <option value="TTE">    
                                                    <option value="SBTTE">
                                                    <option value="SOF">
                                                    <option value="SGTO">
                                                    <option value="EE CC">                                                    
                                                </datalist>
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="arma" class="col-sm-12 text-danger">ARMA</label>
                                            <div class="col-lg-12">                                                
                                                <input type="text" name="arma" class="form-control" list="arma" required/>                                                
                                                <datalist id="arma">
                                                    <option value="DAEN">
                                                    <option value="DEM">
                                                    <option value="DIM">
                                                    <option value="INF"> 
                                                    <option value="CAB">    
                                                    <option value="ART">    
                                                    <option value="ING">
                                                    <option value="COM">
                                                    <option value="LOG">                                                   
                                                </datalist>
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre" class="col-sm-12 text-danger">NOMBRE</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="nombre" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="paterno" class="col-sm-12 text-danger">PATERNO</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="paterno" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="materno" class="col-sm-12 text-danger">MATERNO</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="materno" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="fecha" class="col-sm-12 text-danger">FECHA DE NACIMIENTO</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="date" name="fecha_nac" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="lugar" class="col-sm-12 text-danger">LUGAR DE NACIMIENTO</label>
                                            <div class="col-lg-12">                                                
                                                    <input type="text" name="lugar_nac" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="lugar" class="col-sm-12 text-danger">CORREO</label>
                                            <div class="col-lg-12">                   
                                                    <input type="text" name="correo" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="lugar" class="col-sm-12 text-danger">CELULAR</label>
                                            <div class="col-lg-12">                   
                                                    <input type="text" name="celular" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="lugar" class="col-sm-12 text-danger">DIRECCIÓN</label>
                                            <div class="col-lg-12">                   
                                                    <input type="text" name="direccion" class="form-control" required/>                                                
                                            </div>                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="lugar" class="col-sm-12 text-danger">FUNCION</label>
                                            <div class="col-lg-12">                
                                                    <input type="text" name="rol" class="form-control" list="rol"required/> 
                                                    <datalist id="rol">
                                                    <option value="PERSONAL">
                                                    <option value="EVALUACION">
                                                    <option value="PLANIFICACION">
                                                    <option value="INSTRUCTOR">                                                     
                                                </datalist>                                               
                                            </div>                                       
                                        </div>                                       
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">REGISTRAR</button>
                                            </div>
                                        </div>
                                    </form>
                                                                
                                </li>
                            </ul>

                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PERSONAL<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-2 row">                           
                                <li class="col-sm-4">
                                    <form action="controlador_personal.php" class="form-inline" METHOD="POST">
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
                                                <button class="btn btn-primary">BUSCAR</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>                         
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">VER PERSONAL<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu-3 row">                           
                                <li class="col-sm-4">
                                    <form action="controlador_modificar.php" class="form-inline" METHOD="POST">
                                        <div class="form-group">
                                            <label for="Usuario" class="col-sm-2">CURSO</label>
                                            <div class="col-xs-12">
                                                <div class="input-group input-group-md">                                                    
                                                    <input type="text" name="ci" class="form-control" placeholder="A-B-C" REQUIRED/>
                                                </div>
                                            </div>                                       
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-sm-offset-0 col-sm-12">
                                                <button class="btn btn-primary">BUSCAR</button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                        </li>                      
                    </ul>                    
                </div>
            </div>
        </nav>    
        <h2 class="text-center content"><?php echo $mensaje;?></h2> 
        <?php
            require_once('../conexion/conexion.php');
            $ci=$_GET['ci'];    
            $result = mysqli_query($conexion, "SELECT * FROM instructor WHERE ci = '".$ci."' ");
            $row = mysqli_fetch_array($result);
            $result1 = mysqli_query($conexion, "SELECT * FROM instructor_mil WHERE ci = '".$ci."' ");
            $row1 = mysqli_fetch_array($result1);
        ?>
        <form action="modificar_instructor.php" class="form-inline" METHOD="POST">
            <div class="form-group">
                <label for="Usuario">CI</label>
                <input type="hidden" name="ci"value="<?php echo $row['ci'];?>">                                         
                <input type="text" name="cim" class="form-control" value="<?php echo $row['ci'];?>" REQUIRED/>                                                                                   
            </div> 
            <div class="form-group">
                <label for="grado">GRADO</label>                                                                                            
                <input type="text" name="grado" class="form-control" value="<?php echo $row1['grado'];?>"requiered/>
                </div>
            <div class="form-group">
                <label for="arma">ARMA</label>                                                                                            
                <input type="text" name="arma" class="form-control" value="<?php echo $row1['arma'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">NOMBRE</label>                                                                                            
                <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">PATERNO</label>                                                                                            
                <input type="text" name="paterno" class="form-control" value="<?php echo $row['ap_paterno'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">MATERNO</label>                                                                                            
                <input type="text" name="materno" class="form-control" value="<?php echo $row['ap_materno'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">FECHA DE NACIMIENTO</label>                                                                                            
                <input type="date" name="fecha_nac" class="form-control" value="<?php echo $row['fecha_nac'];?>" requiered/>                                            
            </div>                                
            <div class="form-group">
                <label for="arma">LUGAR DE NACIMIENTO</label>                                                                                            
                <input type="text" name="lugar_nac" class="form-control" value="<?php echo $row['lugar_nac'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">CORREO</label>                                                                                            
                <input type="text" name="correo" class="form-control" value="<?php echo $row['correo'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">CELULAR</label>                                                                                            
                <input type="text" name="celular" class="form-control" value="<?php echo $row['celular'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">DIRECCION</label>                                                                                            
                <input type="text" name="direccion" class="form-control" value="<?php echo $row['direccion'];?>" requiered/>                                            
            </div>
            <div class="form-group">
                <label for="arma">FUNCION</label>                                                                                            
                <input type="text" name="rol" class="form-control" value="<?php echo $row1['rol'];?>" requiered/>                                            
            </div>            
            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                    <button class="btn btn-primary">MODIFICAR</button>
                </div>
            </div>  


            
        </form>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
        


    </body>
</html>