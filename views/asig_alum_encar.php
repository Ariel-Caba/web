<?php
include_once 'componentes/header.php'
?>
<?php
include_once 'componentes/navbar.php'
?>
<?php
include_once 'componentes/navbar_asignacion.php'
?>
<?php
include_once '../data/conexion.php';
?>
    <div class="container">
        <section class="main row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php
                include_once '../data/e_combobox.php';
                ?>
                <?php
                include_once '../data/e_tabla.php';

                ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div>
                    <?php
                    include_once '../data/e_select_alumno.php'
                    ?>
                </div>

            </div>
        </section>

    </div>
    <script src="../business/asignacion.js"></script>
<?php
include_once 'componentes/footer.php'
?>