<?php
include_once 'componentes/header.php'
?>
<?php
include_once 'componentes/navbar.php'
?>
<?php
include_once 'componentes/navbar_actualizar.php'
?>
<?php
include_once '../data/conexion.php';
?>
<div class="container">
    <h2>Cursos</h2>
    <?php
    $result_curso = mysqli_query($varconexion, "SELECT * FROM curso where carnet_prof<=>null");
    if ($result_curso) {
        ?>
        <table class="table">
            <tr>
                <td width="20%">id</td>
                <td width="60%">Nombre</td>
                <td width="20%"></td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_curso)) {
                ?>
                <tr>
                    <td><?php echo $row["cod_curso"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><a class="btn btn-success" href="actualizar_curso.php?cod_curso=<?php echo $row["cod_curso"];?>">Editar</a>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <?php
    } else {
        echo "No existen cursos";
    }
    ?>
</div>
<?php
include_once 'componentes/footer.php'
?>