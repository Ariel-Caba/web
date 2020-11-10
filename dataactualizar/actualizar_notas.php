<?php
include('../data/conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){
    $carnet=$datos->carnet;
    $cod_curso=$datos->cod_curso;

    $nota1=$datos->nota1;
    $nota2=$datos->nota2;
    $nota3=$datos->nota3;
    $nota4=$datos->nota4;


    $query_notas ="UPDATE asignacion SET 
    nota1=$nota1,nota2=$nota2,
     nota3=$nota3,nota4=$nota4 WHERE carnet_usuario=$carnet and cod_curso=$cod_curso;";
    mysqli_query($varconexion, $query_notas);

    mysqli_close($varconexion);
}

?>