<?php
include_once 'componentes/header.php'
?>
<?php
include_once 'componentes/navbar.php'
?>

<?php
include_once '../data/conexion.php';
?>
<?php
include_once '../data/conexion.php';
$carnet = $_GET['car'];
$cod = $_GET['cod'];
$result_notas = mysqli_query($varconexion,
    "SELECT a.carnet_usuario as 'carnet', alumno.nombre1 as 'nombre',
    alumno.apellido1 as 'apellido', curso.cod_curso as 'cod_curso', curso.nombre as 'curso', a.nota1 as 'nota1',
    a.nota2 as 'nota2', a.nota3 as 'nota3',  a.nota4 as 'nota4'
	FROM asignacion a
	LEFT JOIN alumno ON a.carnet_usuario = alumno.carnet_usuario
    LEFT JOIN curso On  a.cod_curso = curso.cod_curso
	WHERE a.carnet_usuario=$carnet and a.cod_curso=$cod;");
$row_notas= mysqli_fetch_array($result_notas);
?>

    <div class="container">
        <section class="main row">
            <div class ="col-xs-12 col-sm-12 col-md-3 col-lg-3" >
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form>
                    <div class="form-group">
                        <label>carnet : <?php echo $row_notas['carnet']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>nombre : <?php echo $row_notas['nombre']; ?> <?php echo $row_notas['apellido']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>curso : <?php echo $row_notas['curso']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>nota1</label>
                        <input type="text" class="form-control" id="nota1" maxlength="2" placeholder="Descripcion del curso" value="<?php echo $row_notas['nota1']; ?>">
                    </div>
                    <div class="form-group">
                        <label>nota2</label>
                        <input type="text" class="form-control" id="nota2" maxlength="2" placeholder="Descripcion del curso" value="<?php echo $row_notas['nota2']; ?>">
                    </div>
                    <div class="form-group">
                        <label>nota3</label>
                        <input type="text" class="form-control" id="nota3" maxlength="2" placeholder="Descripcion del curso" value="<?php echo $row_notas['nota3']; ?>">
                    </div>
                    <div class="form-group">
                        <label>nota4</label>
                        <input type="text" class="form-control" id="nota4" maxlength="2" placeholder="Descripcion del curso" value="<?php echo $row_notas['nota4']; ?>">
                    </div>
                    <div class="" align ="right">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MesajeModal" onclick="act_nota('<?php echo $row_notas['carnet'];?>','<?php echo $row_notas['cod_curso'];?>')">Actualizar</button>
                        <button onclick="window.location.href='/views/act_notas.php'" type="button"  class="btn btn-light" data-toggle="modal" data-target="#MesajeModal" >Salir</button>
                    </div>
                </form>
            </div>
        </section>
    </div>


    <script src="../business/actualizar.js"></script>
<?php
include_once 'componentes/footer.php'
?>