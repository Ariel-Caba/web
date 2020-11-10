<div class="container_fluid alert alert-light" role="alert">
    <div class="container">
        <section class="main row">

            <div class="container">
                <form method="POST" name="formregistro" id="formregistro">
<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="nombre1" id="nombre1" placeholder="primer nombre" value="<?php echo $row_alumno['nombre1']; ?>">
        <input type="text" class="form-control" name="nombre2" id="nombre2" placeholder="segundo nombre" value="<?php echo $row_alumno['nombre2']; ?>">
    </div>
    <small name="small_nombres" style="color:red" id="small_nombres"></small>
</div>

<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="primer apellido" value="<?php echo $row_alumno['apellido1']; ?>">
        <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="segundo apellido" value="<?php echo $row_alumno['apellido2']; ?>">
    </div>
    <small name="small_appellidos" style="color:red" id="small_appellidos"></small>
</div>
<div class="form-group">
    <input type="text" class="form-control" maxlength="8" name="telefono" id="telefono" placeholder="Telefono - ingrese uno con 8 numeros" value="<?php echo $row_alumno['telefono']; ?>">
    <small name="small_telefono" style="color:red" id="small_telefono"></small>
</div>
<div class="form-group">
    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Correo electronico" value="<?php echo $row_alumno['correo']; ?>">
</div>
<div class="form-group">
    <input type="password" class="form-control" name="contrasenia1" id="contrasenia1" placeholder="Contraseña" value="<?php echo $row_user['contrasenia']; ?>">
</div>
<div class="form-group">
    <input type="password" class="form-control" name="contrasenia2" id="contrasenia2" placeholder="Confirmar contraseña" value="<?php echo $row_user['contrasenia']; ?>">
    <small name="small_contrasenia" style="color:red" id="small_contrasenia"></small>
</div>

<div class="form-group">
    <label>Ingrese una fecha correcta, si no, los datos no se registraran</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" name="fecha" id="fecha">Fecha de nacimiento </span>
        </div>
        <input type="text" class="form-control" name="anio" id="anio" placeholder="Año"  value="<?php echo $row_alumno['anio']; ?>">
        <input type="text" class="form-control" name="mes" id="mes" placeholder="Mes"  value="<?php echo $row_alumno['mes']; ?>">
        <input type="text" class="form-control" name="dia" id="dia" placeholder="Día"  value="<?php echo $row_alumno['dia']; ?>">
    </div>
    <small name="small_fecha" style="color:red" id="small_fecha"></small>
</div>