<div class="container">
    <h2>Alumnos</h2>
    <?php
    $resultphppersona = mysqli_query($varconexion,
        "select alumno.carnet_usuario as 'carnet', alumno.nombre1 as 'nombre', alumno.apellido1 as 'apellido',
			    curso.cod_curso as 'cod_curso', curso.nombre as 'nombre_curso'
                from alumno, curso, asignacion where alumno.carnet_usuario <=> asignacion.carnet_usuario and curso.cod_curso <=> asignacion.cod_curso
                order by alumno.carnet_usuario;");
    if ($resultphppersona) {

        ?>
        <table class="table">
            <tr>
                <td width="10%">id</td>
                <td width="60%">Nombre</td>
                <td width="20%">Curso</td>
                <td width="10%">Curso</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($resultphppersona)) {
                ?>
                <tr>
                    <td><?php echo $row["carnet"]; ?></td>
                    <td><?php echo $row["nombre"]; ?> <?php echo $row["apellido"]; ?></td>
                    <td><?php echo $row["nombre_curso"]; ?></td>
                    <td><a class="btn btn-warning" onclick="desasig_curso_alum('<?php echo $row["cod_curso"] ?>','<?php echo $row["carnet"] ?>')">Desasignar</a>
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