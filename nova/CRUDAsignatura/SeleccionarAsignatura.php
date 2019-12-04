<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite seleccionar las asignaturas que estan ingresados en el sistema. Este nos devuelve una tabla para poder visualizar a todos las asignaturas.
 * @author Grupo de trabajo
 */
function seleccionarAsignaturas() {
    $conn = connect();
    $sql = "select * from asignatura where id!=0";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<tr>
                            <td width="12.5%"  align="center" style="color:black"><a href=ActualizarAsignatura.php?id='.$fila['id'].'>'.$fila['id'].'</a></td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['nombre'].'</td>
                        </tr>';
    }

    $conn->close();
}