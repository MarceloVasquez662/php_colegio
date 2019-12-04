<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite seleccionar los profesores que estan ingresados en el sistema. Este nos devuelve una tabla para poder visualizar a todos los profesores.
 * @author Grupo de trabajo
 */
function seleccionarProfesor() {
    $conn = connect();
    $sql = "select * from profesor where rut!='0'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<tr>
                            <td width="12.5%"  align="center" style="color:black"><a href=ActualizarProfesor.php?rut='.$fila['rut'].'>'.$fila['rut'].'</a></td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['nombre'].'</td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['apellido'].'</td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['nacimiento'].'</td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['correo'].'</td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['direccion'].'</td>
                        </tr>';
    }

    $conn->close();
}