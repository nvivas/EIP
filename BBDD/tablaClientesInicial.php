<table>
        <th>Dni</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Año de nacimiento</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Codigo Postal</th>
        <th>Poblacion</th>
        <th>Provincia</th>
        <th>Pais</th>
        <th colspan=2>Opciones</th>

        <?php
        $resultado = mysqli_query($conexion, $res);

        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

        ?>
                <tr>
                        <td><?= $fila['dni'] ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['apellidos'] ?></td>
                        <td><?= $fila['anyo_nacimiento'] ?></td>
                        <td><?= $fila['telefono'] ?></td>
                        <td><?= $fila['direccion'] ?></td>
                        <td><?= $fila['codigo_postal'] ?></td>
                        <td><?= $fila['poblacion'] ?></td>
                        <td><?= $fila['provincia'] ?></td>
                        <td><?= $fila['pais'] ?></td>
                        <td><a href='borrarCliente.php?dni=<?= $fila['dni'] ?>'>Borrar</a></td>
                        <td><a href='actualizarClientes.php?dni=<?= $fila['dni'] ?>'> Modificar</a></td>
                </tr>
        <?php
        }
        ?>
</table>
<div class="volver">
        <a href='index.php'>VOLVER</a>
</div>