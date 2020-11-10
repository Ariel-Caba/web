<div class="container">
    <h2>Notas de los alumnos</h2>
    <?php
    $result_encargado = mysqli_query($varconexion,
        "SELECT a.carnet_usuario as 'carnet', alumno.nombre1 as 'nombre',
    alumno.apellido1 as 'apellido', curso.nombre as 'curso', a.nota1 as 'nota1',
    a.nota2 as 'nota2', a.nota3 as 'nota3',
    a.nota4 as 'nota4', ((a.nota1+a.nota2+a.nota3+a.nota4)/4)as 'promedio'
	FROM asignacion a
	LEFT JOIN alumno ON a.carnet_usuario = alumno.carnet_usuario
    LEFT JOIN curso On  a.cod_curso = curso.cod_curso
	ORDER BY a.carnet_usuario;");
    if ($result_encargado) {
        ?>
        <table class="table" style="overflow-y:scroll">
            <tr>
                <td width="10%">carnet</td>
                <td width="40%">Nombre</td>
                <td width="20%">Curso</td>
                <td width="5%">nota1</td>
                <td width="5%">nota2</td>
                <td width="5%">nota3</td>
                <td width="5%">nota4</td>
                <td width="10%">promedio</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_encargado)) {
                ?>
                <tr>
                    <td><?php echo $row["carnet"]; ?></td>
                    <td><?php echo $row["nombre"]; ?> <?php echo $row["apellido"]; ?></td>
                    <td><?php echo $row["curso"]; ?></td>
                    <td><?php echo $row["nota1"]; ?></td>
                    <td><?php echo $row["nota2"]; ?></td>
                    <td><?php echo $row["nota3"]; ?></td>
                    <td><?php echo $row["nota4"]; ?></td>
                    <td><?php echo $row["promedio"]; ?></td>
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