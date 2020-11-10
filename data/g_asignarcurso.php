<?php
include('conexion.php');
$datos = json_decode(file_get_contents("php://input"));
if(isset($datos)){


    $tabla=$datos->tabla;
    $carnet=$datos->carnet;
    $cod_curso=$datos->cod_curso;
    if ($tabla == "profesor"){

        $query ="UPDATE curso SET carnet_prof=$carnet WHERE cod_curso=$cod_curso;";

        if(mysqli_query($varconexion, $query)){
            echo json_encode(array("success"=>true,"message"=>"asignado con exito"));
        }
    }
    if ($tabla == "alumno"){
        $query ="insert into asignacion values ($cod_curso,$carnet,0,0,0,0)";
        if(mysqli_query($varconexion, $query)){
            echo json_encode(array("success"=>true,"message"=>"asignado con exito"));
        }
    }

}
?>