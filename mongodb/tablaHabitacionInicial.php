<table>
        <th>Número de habitacion</th>
        <th>Tipo de Habitacion</th>
        <th>Temporada</th>
        <th>Cuna</th>
        <th>Dni del Cliente</th>
        <th colspan=2>Opciones</th>
        <?php

        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

        ?>
                <tr>
                        <td><?= $fila['num_habitacion'] ?></td>
                        <td><?= $fila['tipo_habitacion'] ?></td>
                        <td><?= $fila['temporada'] ?></td>
                        <td><?= $fila['cuna'] ?></td>
                        <td><?= $fila['cliente_dni'] ?></td>
                        <td><a href='borrarHabitacion.php?num_habitacion=<?= $fila['num_habitacion'] ?>'> Borrar</a></td>
                        <td><a href='actualizarHabitaciones.php?num_habitacion=<?= $fila['num_habitacion'] ?>'>Modificar</a></td>
                </tr>
        <?php
        }
        ?>
</table>