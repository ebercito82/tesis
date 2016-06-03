<?php
    require_once('conexion/conexion.php');
    $usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
    echo $usuario;
    echo $pass;
    $result = mysqli_query($conexion, "SELECT * FROM cuenta WHERE ci = '".$usuario."' AND password = '".$pass."' ");
    if($row = mysqli_fetch_assoc($result))
        {
            if($row['rol']=='ADMINISTRADOR' and $row['estado']=='ACTIVO')
                {
                header('location: administrador/index.php');
                }
            if($row['rol']=='PERSONAL' and $row['estado']=='ACTIVO')
                {
                header('location: personal/index.php');
                }
            if($row['rol']=='PLANIFICACION' and $row['estado']=='ACTIVO')
                {
                header('location: planificacion/index.php');
                }
        }
    else{     
        header('location: index.php?mensaje="LOS DATOS NO SE ENCUENTRAN REGISTRADOS EN EL PROGRAMA"');
        }
  
?>
