<?php
include_once 'componentes/header.php'
?>
<?php
include_once 'componentes/navbar.php'
?>
<?php
include_once '../data/conexion.php';
?>
    <div class="container">

        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/views/reporte_emergencia.php">contactos de emergencia por alumno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/views/reporte_notas.php">notas por alumno</a>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="/views/reporte_noasignados.php">Estudiantes no asignados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/views/reporte_profesores.php">profesores asignados a cursos</a>
                    </li>
                </ul>
            </div>


            <div class="card-body">
                <?php
                include_once '../datareportes/notas_alumno.php'
                ?>
            </div>
        </div>
    </div>

<?php
include_once 'componentes/footer.php'
?>