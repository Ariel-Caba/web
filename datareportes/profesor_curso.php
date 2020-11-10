<div class="container">
    <h2>Profesores asignados a cursos</h2>
    <?php
    $result_encargado = mysqli_query($varconexion,
        "SELECT p.carnet_usuario as 'carnet', p.nombre1 as 'nombre', 
        p.apellido1 as 'apellido', c.cod_curso as 'cod_curso', c.nombre as 'curso'
        FROM profesor p
        LEFT JOIN curso c ON p.carnet_usuario <=> c.carnet_prof;");
    if ($result_encargado) {
        ?>
        <table class="table" style="overflow-y:scroll">
            <tr>
                <td width="10%">Carnet profesor</td>
                <td width="60%">Nombre</td>
                <td width="10%">Codigo del curso</td>
                <td width="20%">Nombre curso</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_encargado)) {
                ?>
                <tr>
                    <td ><?php echo $row["carnet"]; ?></td>
                    <td ><?php echo $row["nombre"]; ?> <?php echo $row["apellido"]; ?></td>
                    <td ><?php echo $row["cod_curso"]; ?></td>
                    <td ><?php echo $row["curso"]; ?></td>
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