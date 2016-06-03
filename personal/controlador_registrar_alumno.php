<?php
    function generateString ($length = 3){
        $string = "";
        $possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $i = 0;
        while ($i < $length) {
            $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $string .= $char;
            $i++;
            }
        $possible="#$%&()_:;<>?/";
        $i = 0;
        while ($i < $length) {
            $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $string .= $char;
            $i++;
            }
        $possible="0123456789";
        $i = 0;
        while ($i < $length) {
            $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $string .= $char;
            $i++;
        }
        return $string;
    }
    require_once('../conexion/conexion.php');
    $ci = $_POST['ci'];
    $grado = $_POST['grado'];
    $arma = $_POST['arma'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['paterno'];
    $ap_materno = $_POST['materno'];
    $fecha_nac = $_POST['fecha_nac'];
    $lugar_nac = $_POST['lugar_nac'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $direccion = $_POST['direccion'];   
    $estado="ACTIVO";
    $situacion="REGULAR";
    $codigo="";
    $rol="ALUMNO";
    $gestion=date('Y');
    //$pass=md5(generateString());
    $password=generateString();
    $result = mysqli_query($conexion, "SELECT * FROM alumno WHERE ci = '".$ci."' ");
    if($row = mysqli_fetch_assoc($result))
    	{
            header('location: index.php?mensaje="EL CI INGRESADO YA FUE REGISTRADO"');    
    		
    	}
    else{

    		$query="INSERT INTO alumno (ci, nombre,ap_paterno,ap_materno,fecha_nac,lugar_nac,sexo,correo,celular,direccion,codigo) 
                            VALUES ($ci, '$nombre','$ap_paterno','$ap_materno','$fecha_nac','$lugar_nac','$sexo','$correo',$celular,'$direccion','$codigo')";
            $result = $conexion->query($query);
            $query="INSERT INTO alumno_militar (ci, grado, arma,gestion,estado,situacion) 
            VALUES ($ci, '$grado','$arma',$gestion,'$estado','$situacion')";
            $result = $conexion->query($query);
            $query="INSERT INTO cuenta (ci, password, rol,estado) VALUES ($ci, '$password','$rol','$estado')";
            $result = $conexion->query($query);
            header('location: index.php?mensaje="EL USUARIO '.$paterno.' FUE REGISTRADO EXITOSAMENTE');    
    }    
?>