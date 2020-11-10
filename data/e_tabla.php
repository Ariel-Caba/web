<div class="container">
    <h2>Encargado</h2>
    <?php
    $resultphppersona = mysqli_query($varconexion,
        " SELECT encargado.carnet_usuario as 'carnete', encargado.nombre1 as 'nombree',alumno.carnet_usuario as 'carneta', alumno.nombre1 as 'nombrea'
                FROM encargado, alumno
                WHERE encargado.carnet_usuario<=>alumno.carnet_encargado
                ORDER BY encargado.carnet_usuario;");
    if ($resultphppersona) {

        ?>
        <table class="table">
            <tr>
                <td width="15%">Carnet</td>
                <td width="30%">Nombre Encargado</td>
                <td width="15%">Carnet</td>
                <td width="30%">Nombre Alumno</td>
                <td width="10%"></td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($resultphppersona)) {
                ?>
                <tr>
                    <td><?php echo $row["carnete"]; ?></td>
                    <td><?php echo $row["nombree"]; ?></td>
                    <td><?php echo $row["carneta"]; ?></td>
                    <td ><?php echo $row["nombrea"]; ?></td>
                    <td ><a class="btn btn-warning" onclick="desasig_alum_encar('<?php echo $row["carnete"] ?>','<?php echo $row["carneta"] ?>')">Desasignar</a>
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