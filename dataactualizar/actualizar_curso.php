<?php
include('../data/conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){
    $cod_curso=$datos->cod_curso;
    $nombre=$datos->nombre;
    $descripcion=$datos->descriptcion;

    $query_curso ="UPDATE curso set nombre='$nombre',descripcion='$descripcion' where cod_curso=$cod_curso;";
    if(mysqli_query($varconexion, $query_curso)){

    }else{
        echo json_encode(array("success"=>false,"message"=>"falla de actualizar"));
    }

    mysqli_close($varconexion);
}
?>