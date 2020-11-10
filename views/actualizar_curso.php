<?php
include_once 'componentes/header.php'
?>
<?php
include_once 'componentes/navbar.php'
?>

<?php
include_once '../data/conexion.php';
$cod_curso = $_GET['cod_curso'];
$result_curso = mysqli_query($varconexion,"SELECT * FROM curso WHERE cod_curso=$cod_curso");
$row_curso= mysqli_fetch_array($result_curso);
?>


    <div class="container">
        <section class="main row">
            <div class ="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="curso" name="curso" placeholder="Ingrese el nombre del curso" value="<?php echo $row_curso['nombre']; ?>">
                        <small name="small_nombre" id="small_nombre"></small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="40" placeholder="Descripcion del curso" value="<?php echo $row_curso['descripcion']; ?>">
                        <small name="small_descripcion" id="small_descripcion"></small>
                    </div>
                    <div class="" align ="right">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MesajeModal" onclick="act_cur('<?php echo $row_curso['cod_curso'];?>')">Actualizar</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MesajeModal" onclick="drop_cur('<?php echo $row_curso['cod_curso'];?>','<?php echo $row_curso['nombre'];?>')">Eliminar</button>
                        <button onclick="window.location.href='/views/act_alumn.php'" type="button"  class="btn btn-light" data-toggle="modal" data-target="#MesajeModal" >Salir</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="../business/actualizar.js"></script>
<?php
include_once 'componentes/footer.php'
?>