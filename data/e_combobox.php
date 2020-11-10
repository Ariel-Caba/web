<?php
$result_encargado = mysqli_query($varconexion, "SELECT carnet_usuario FROM encargado");
if ($result_encargado) {
    ?>
    <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="encargado_select">
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result_encargado)) {
                    ?>
                    <option><?php echo $row['carnet_usuario'];?></option>
                    <?php
                    $i++;
                }
                ?>
            </select>
        </div>
    </form>
    <?php
} else {
    echo "No existen cursos";
}
?>