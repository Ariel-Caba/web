<?php
include('conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){
    $tipo=$datos->tipo;
    $carnet=$datos->carnet;

    $contrasenia=$datos->contraseña;
    $nombre1=$datos->nombre1;
    $nombre2=$datos->nombre2;
    $apellido1=$datos->apellido1;
    $apellido2=$datos->apellido2;
    $telefono=$datos->telefono;
    $correo=$datos->correo;
    $fecha=$datos->fnan;


    $tabla = "";
    if($tipo=="p"){
        $tabla = "profesor";
    }
    elseif($tipo=="a"){
        $tabla = "alumno";
    }
    elseif($tipo=="e"){
        $tabla = "encargado";
    }

    $query_usuario ="insert into usuario values($carnet,'$contrasenia','$tipo')";
    if(mysqli_query($varconexion, $query_usuario)){
        $query_tabla = "insert into $tabla(carnet_usuario,nombre1,nombre2,apellido1,apellido2,telefono,correo,fnac)
    values($carnet,'$nombre1','$nombre2','$apellido1','$apellido2','$telefono','$correo','$fecha')";
        if(mysqli_query($varconexion, $query_tabla)){
            header("Location: ../views/registro.php");
            echo json_encode(array("success"=>true,"message"=>"creado con exito"));
            echo "<script>alert('creado exitosament \n carnet: '$carnet)</script>";
        }else{
            echo json_encode(array("success"=>false,"message"=>"falla de crear"));
        }
    }else{
        echo json_encode(array("success"=>false,"message"=>"falla de crear"));
    }

    mysqli_close($varconexion);
}

?>