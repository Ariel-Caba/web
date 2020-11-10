<div class="container">
    <h2>Alumnos no asignados a cursos</h2>
    <?php
    $result_encargado = mysqli_query($varconexion,
        "SELECT a.carnet_usuario as 'carnet', a.nombre1 as 'nombre', 
        a.apellido1 as 'apellido', s.cod_curso as 'curso'
        FROM alumno a
        left join asignacion s on a.carnet_usuario <=> s.carnet_usuario;");
    if ($result_encargado) {
        ?>
        <table class="table" style="overflow-y:scroll">
            <tr>
                <td width="10%">carnet</td>
                <td width="40%">Nombre</td>

            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_encargado)) {
                if($row["curso"]==null){
                ?>
                <tr>
                    <td><?php echo $row["carnet"]; ?></td>
                    <td><?php echo $row["nombre"]; ?> <?php echo $row["apellido"]; ?></td>
                </tr>
                <?php
                }
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