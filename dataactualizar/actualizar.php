<?php
include('../data/conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){
    $tabla=$datos->tabla;
    $carnet=$datos->carnet;
    $contrasenia=$datos->contraseña;

    $nombre1=$datos->nombre1;
    $nombre2=$datos->nombre2;
    $apellido1=$datos->apellido1;
    $apellido2=$datos->apellido2;
    $telefono=$datos->telefono;
    $correo=$datos->correo;
    $fecha=$datos->fnan;


    $query_usuario ="UPDATE usuario SET contrasenia='$contrasenia' WHERE carnet_usuario=$carnet;";
    if(mysqli_query($varconexion, $query_usuario)){
        $query_tabla = "UPDATE $tabla SET nombre1='$nombre1', nombre2='$nombre2',
apellido1='$apellido1',apellido2='$apellido2',
telefono='$telefono',correo='$correo',fnac='$fecha'
WHERE carnet_usuario=$carnet;";
        if(mysqli_query($varconexion, $query_tabla)){
            header("Location: ../views/registro.php");
            echo json_encode(array("success"=>true,"message"=>"creado con exito"));
        }else{
            echo json_encode(array("success"=>false,"message"=>"falla de crear"));
        }
    }else{
        echo json_encode(array("success"=>false,"message"=>"falla de crear"));
    }

    mysqli_close($varconexion);
}

?>