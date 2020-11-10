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
        <h2>Porfesor</h2>
        <?php
        $result_profesor = mysqli_query($varconexion,
            "select carnet_usuario as 'carnet',CONCAT(nombre1, ' ',nombre2) as 'nombre',
    CONCAT(apellido1, ' ',apellido2) as 'apellido',
    telefono as 'telefono', correo as 'correo', fnac as 'fecha',
    TIMESTAMPDIFF(YEAR, fnac, curdate()) AS 'edad'
    from profesor;");
        if ($result_profesor) {
            ?>
            <table class="table">
                <tr>
                    <td width="10%">carnet</td>
                    <td width="20%">Nombres</td>
                    <td width="20%">Apellidos</td>
                    <td width="10%">telefono</td>
                    <td width="15%">correo</td>
                    <td width="10%">fnac</td>
                    <td width="5%">edad</td>
                    <td width="10%"></td>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result_profesor)) {
                    ?>
                    <tr>
                        <td><?php echo $row["carnet"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["apellido"]; ?></td>
                        <td><?php echo $row["telefono"]; ?></td>
                        <td><?php echo $row["correo"]; ?></td>
                        <td><?php echo $row["fecha"]; ?></td>
                        <td><?php echo $row["edad"]; ?></td>
                        <td><a class="btn btn-success" href="actualizar_prof.php?carnet=<?php echo $row["carnet"];?>">Editar</a>
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