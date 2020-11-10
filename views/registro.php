<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <link href="desings/estilo_registro.css" rel="stylesheet">

</head>
<body>
<?php
include_once 'componentes/navbar.php'
?>
<?php
include_once 'componentes/navbar_registro.php'
?>
<div class="container_fluid alert alert-light" role="alert">
    <div class="container">
        <section class="main row">
            <div class ="col-xs-0 col-sm-0 col-md-1 col-lg-1" >
            </div>
            <div class ="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
                <input type="radio" id="Rprofesor" name="Rpersona" value="Rprofesor" checked> Profesor<br>
                <input type="radio" id="Ralumno" name="Rpersona" value="Ralumno"> Alumno<br>
                <input type="radio" id="Rencargado" name="Rpersona"  value="Rencargado"> Encargado
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form method="POST" name="formregistro" id="formregistro">
                    <div class="form-group">
                        <input type="text" class="form-control" name="carnet" id="carnet" maxlength="4" placeholder="Carnet - Ingrese 4 numeros">
                        <small name="small_carnet" id="small_carnet"></small>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="Primer nombre">
                            <input type="text" class="form-control" name="nombre2" id="nombre2" placeholder="Segundo nombre">
                        </div>
                        <small name="small_nombres" id="small_nombres"></small>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Primer apellido">
                            <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="Segundo apellido">
                        </div>
                        <small name="small_appellidos" id="small_appellidos"></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" maxlength="8" name="telefono" id="telefono" placeholder="Telefono - Ingrese los ultimos 8 numeros">
                        <small name="small_telefono" id="small_telefono"></small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Correo electronico">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="contrasenia1" id="contrasenia1" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="contrasenia2" id="contrasenia2" placeholder="Confirmar contraseña">
                        <small name="small_contrasenia" id="small_contrasenia"></small>
                    </div>

                    <div class="form-group">
                        <label>Ingrese una fecha correcta, si no, los datos no se registraran</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" name="fecha" id="fecha">Fecha de nacimiento</span>
                            </div>
                            <input type="text" class="form-control" name="anio" id="anio" placeholder="Año">
                            <input type="text" class="form-control" name="mes" id="mes" placeholder="Mes">
                            <input type="text" class="form-control" name="dia" id="dia" placeholder="Día">
                        </div>
                        <small name="small_fecha" id="small_fecha"></small>
                    </div>

                    <div class="" align ="right">
<button type="button" id="btnregistro"  class="btn btn-success" data-toggle="modal" data-target="#MesajeModal" onclick="registrardatos()">Registrar</button>
</div>
</form>
</div>
</section>
</div>
</div>


<script src="../business/registro.js"></script>
<?php
include_once 'componentes/footer.php'
?>