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
    $cim = $_POST['cim'];
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
    $rol = "ALUMNO";
    $estado="ACTIVO";
    $situacion="REGULAR";
    $gestion=date('Y');
    //$pass=md5(generateString());
    $password=generateString();
    
    $query="UPDATE alumno SET ci='".$cim."',nombre='".$nombre."', ap_paterno='".$ap_paterno."',
    ap_materno='".$ap_materno."',fecha_nac='".$fecha_nac."',lugar_nac='".$lugar_nac."',sexo='".$sexo."',correo='".$correo."',
    celular='".$celular."',direccion='".$direccion."' WHERE ci='".$ci."' ";
    $result = $conexion->query($query);

    $query="UPDATE alumno_militar SET ci='".$cim."', grado='".$grado."', arma='".$arma."',gestion='".$gestion."'
    ,estado='".$estado."' WHERE ci='".$ci."' ";
    $result = $conexion->query($query);
    
    $query="UPDATE cuenta SET ci='".$cim."', password='".$password."', rol='".$rol."',estado='".$estado."'
    WHERE ci='".$ci."' ";
    $result = $conexion->query($query);

    header('location: index.php?mensaje="EL USUARIO '.$paterno.' FUE MODIFICADO EXITOSAMENTE'); 
    
?>