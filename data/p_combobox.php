    <?php
    $result_profesor = mysqli_query($varconexion, "SELECT carnet_usuario FROM profesor");
    if ($result_profesor) {
        ?>
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="profesor_select">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_profesor)) {
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





