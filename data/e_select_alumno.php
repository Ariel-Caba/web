<div class="container">
    <h2>Alumnos</h2>
    <?php
    $result_encargado = mysqli_query($varconexion, "SELECT carnet_usuario,nombre1,apellido1 FROM alumno where carnet_encargado<=>null");
    if ($result_encargado) {
        ?>
        <table class="table">
            <tr>
                <td width="10%">id</td>
                <td width="60%">Nombre</td>
                <td width="30%">Nombre</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_encargado)) {
                ?>
                <tr>
                    <td><?php echo $row["carnet_usuario"]; ?></td>
                    <td><?php echo $row["nombre1"]; ?> <?php echo $row["apellido1"]; ?></td>
                    <td><a class="btn btn-success" onclick="asig_alum_encar('<?php echo $row["carnet_usuario"] ?>')">Asignar</a>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <?php
    } else {
        echo "alumnos no disponibles";
    }
    ?>
</div>
