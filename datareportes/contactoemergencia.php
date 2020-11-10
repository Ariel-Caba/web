<div class="container">
    <h2>Contactos de emergencia</h2>
    <?php
    $result_emergencia = mysqli_query($varconexion,
        "SELECT alumno.carnet_usuario as 'carnet_alum', alumno.nombre1 as 'nombre_alum', 
        alumno.apellido1 as 'apellido_alum', encargado.carnet_usuario as 'canet_encar',
        encargado.nombre1 as 'nombre_encar' ,encargado.apellido1 as 'apellido_encar',
        encargado.telefono as 'telefono_encar'
        FROM alumno
        LEFT JOIN encargado ON alumno.carnet_encargado <=> encargado.carnet_usuario;");

    if ($result_emergencia) {
        ?>
        <table class="table">
            <tr class="thead-dark">
                <td width="10%">Carnet Alumno</td>
                <td width="30%">Nombre Alumno</td>
                <td width="10%">Carnet Encargado</td>
                <td width="30%">Nombre Encargado</td>
                <td width="20%">Contacto de Emergencia</td>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result_emergencia)) {
                $carnet = "";
                $nombre = "";
                $apellido="";
                $telefono="";
                if($row["canet_encar"] != null){
                    $carnet = $row["canet_encar"];
                }else{
                    $carnet = "no tiene";
                }
                if($row["nombre_encar"] != null){
                    $nombre = $row["nombre_encar"];
                }else{
                    $nombre = "contacto";
                }
                if($row["apellido_encar"] != null){
                    $apellido = $row["apellido_encar"];
                }else{
                    $apellido = "de";
                }
                if($row["telefono_encar"] != null){
                    $telefono = $row["telefono_encar"];
                }else{
                    $telefono = "emergencia";
                }

                ?>
                <tr>
                    <td><?php echo $row["carnet_alum"]; ?></td>
                    <td><?php echo $row["nombre_alum"]; ?> <?php echo $row["apellido_alum"]; ?></td>
                    <td><?php echo $carnet; ?></td>
                    <td><?php echo $nombre; ?> <?php echo $apellido; ?></td>
                    <td><?php echo $telefono ?></td>
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