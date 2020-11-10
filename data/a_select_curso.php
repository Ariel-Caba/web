<div class="container">
    <h2>Cursos</h2>
    <?php
    $result_curso = mysqli_query($varconexion, "SELECT * FROM curso");
    if ($result_curso) {
        ?>
        <table class="table">
            <tr>
                <td width="10%">id</td>
                <td width="60%">Nombre</td>
                <td width="30%">Nombre</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_curso)) {
                ?>
                <tr>
                    <td><?php echo $row["cod_curso"]; ?></td>
                    <td><?php echo $row["nombre"]; ?></td>
                    <td><a class="btn btn-success" onclick="asig_curso_alum('<?php echo $row["cod_curso"] ?>')">Asignar</a>
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
