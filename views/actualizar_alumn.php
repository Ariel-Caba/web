<?php
include_once 'componentes/header.php'
?>
<?php
include_once 'componentes/navbar.php'
?>

<?php
include_once '../data/conexion.php';
$carnet = $_GET['carnet'];
$result_user = mysqli_query($varconexion,"SELECT * FROM usuario WHERE carnet_usuario= $carnet ");
$result_alumno = mysqli_query($varconexion,
    "select *,year(fnac) as 'anio', month(fnac) as 'mes', day(fnac) as 'dia'
    from alumno WHERE carnet_usuario=$carnet;");
$row_user= mysqli_fetch_array($result_user);
$row_alumno= mysqli_fetch_array($result_alumno);
?>
<?php
include_once 'componentes/form_act.php';
?>
    <div class="" align ="right">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MesajeModal" onclick="act('<?php echo $row_alumno['carnet_usuario']; ?>','alumno')">Actualizar</button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MesajeModal" onclick="drop('<?php echo $row_alumno['carnet_usuario']; ?>','alumno','<?php echo $row_alumno['nombre1']; ?>','<?php echo $row_alumno['apellido2']; ?>')">Eliminar</button>
        <button onclick="window.location.href='/views/act_alumn.php'" type="button"  class="btn btn-light" data-toggle="modal" data-target="#MesajeModal" >Salir</button>
    </div>
    </form>
    </div>
    </section>
    </div>
    </div>

    <script src="../business/actualizar.js"></script>
<?php
include_once 'componentes/footer.php'
?>