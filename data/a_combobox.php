<?php
$result_alumno = mysqli_query($varconexion, "SELECT carnet_usuario FROM alumno");
if ($result_alumno) {
    ?>
    <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="alumno_select">
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result_alumno)) {
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