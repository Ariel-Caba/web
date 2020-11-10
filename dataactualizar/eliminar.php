<?php
include('../data/conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){
    $tabla=$datos->tabla;
    $carnet=$datos->carnet;

    $query_usuario ="DELETE FROM usuario WHERE carnet_usuario= $carnet";
    mysqli_query($varconexion, $query_usuario);
    mysqli_close($varconexion);
}

?>