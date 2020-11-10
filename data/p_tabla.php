<div class="container">
    <h2>Profesores</h2>
<?php
$resultphppersona = mysqli_query($varconexion,
    " SELECT profesor.carnet_usuario as 'carnet', profesor.nombre1 as 'nombre', profesor.apellido1 as 'apellido', curso.nombre as 'nombre_curso', curso.nombre as 'nombre curso',curso.cod_curso as 'cod_curso'
            FROM profesor, curso
            WHERE profesor.carnet_usuario<=>curso.carnet_prof
            ORDER BY profesor.carnet_usuario");
if ($resultphppersona) {

    ?>
    <table class="table">
        <tr>
            <td width="10%">id</td>
            <td width="60%">Nombre</td>
            <td width="20%">Curso</td>
            <td width="10%"></td>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($resultphppersona)) {
            ?>
            <tr>
                <td><?php echo $row["carnet"]; ?></td>
                <td><?php echo $row["nombre"]; ?> <?php echo $row["apellido"]; ?></td>
                <td><?php echo $row["nombre_curso"]; ?></td>
                <td><a class="btn btn-warning" onclick="desasig_curso_prof('<?php echo $row["cod_curso"] ?>','<?php echo $row["carnet"] ?>')">Desasignar</a>
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








