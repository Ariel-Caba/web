<?php
include('conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){

    $nombre=$datos->nombre;
    $descriptcion=$datos->descriptcion;
    $query_usuario ="insert into curso values(null,'$nombre','$descriptcion',null)";
    if(mysqli_query($varconexion, $query_usuario)){
        echo json_encode(array("success"=>true,"message"=>"creado con exito"));
    }else{
        echo json_encode(array("success"=>false,"message"=>"falla de crear"));
    }
    mysqli_close($varconexion);
}
?>