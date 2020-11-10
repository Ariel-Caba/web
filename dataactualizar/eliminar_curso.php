<?php
include('../data/conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){
    $cod_curso=$datos->cod_curso;

    $query_usuario ="DELETE FROM curso WHERE cod_curso= $cod_curso";
    mysqli_query($varconexion, $query_usuario);
    mysqli_close($varconexion);
}
?>