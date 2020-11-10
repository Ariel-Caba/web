<?php
include('conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){


    $funcion=$datos->funcion;
    $carnetencar=$datos->carnetencar;
    $carnetalum=$datos->carnetalum;
    if ($funcion == "asignar"){
        $query ="update alumno set carnet_encargado=$carnetencar where carnet_usuario <=> $carnetalum;";
        if(mysqli_query($varconexion, $query)){
            echo json_encode(array("success"=>true,"message"=>"asignado con exito"));
        }
    }
    if ($funcion == "desasignar"){
        $query ="update alumno set carnet_encargado=null where carnet_usuario <=> $carnetalum;";
        if(mysqli_query($varconexion, $query)){
            echo json_encode(array("success"=>true,"message"=>"asignado con exito"));
        }
    }

}
?>