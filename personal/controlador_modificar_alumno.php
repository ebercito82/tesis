<?php    
    require_once('../conexion/conexion.php');
    $ci = $_POST['ci'];    
    $result = mysqli_query($conexion, "SELECT * FROM alumno WHERE ci = '".$ci."' ");
    if($row = mysqli_fetch_assoc($result))
    	{
            header("location: vista_alumno.php?ci=$ci");
        }
    else{
        header('location: index.php?mensaje="EL CARNET '.$ci.' NO SE ENCUENTRA REGISTRADO');        
    }    

?>