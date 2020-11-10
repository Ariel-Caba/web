<?php
    $varconexion = mysqli_connect('localhost','root','vengadores','projectf');

    if(!$varconexion){
        die("la conexion fallo : "+ mysqli_connect_error());
    }

?>

