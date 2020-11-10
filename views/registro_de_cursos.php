<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>registro de curso</title>
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


    <div class="container">
        <section class="main row">
            <div class ="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="curso" name="curso" placeholder="Ingrese el nombre del curso">
                        <small name="small_nombre" id="small_nombre"></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="40" placeholder="Descripcion del curso">
                        <small name="small_descripcion" id="small_descripcion"></small>
                    </div>
                    <div class="" align ="right">
                        <button type="button" id="btnrcursos"  class="btn btn-success" data-toggle="modal" data-target="#MesajeModal" onclick="registrarcursos()">Registrar</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="../business/cursos.js"></script>
<?php
include_once 'componentes/footer.php'
?>