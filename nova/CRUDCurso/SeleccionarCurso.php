<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite seleccionar los cursos que estan ingresados en el sistema. Este nos devuelve una tabla para poder visualizar a todos los cursos.
 * @author Grupo de trabajo
 */
function seleccionarCurso() {
    $conn = connect();
    $sql = "select * from curso where idcurso!=0";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<tr>
                            <td width="25%"  align="center" style="color:black">'.$fila['idcurso'].'</td>
                            <td width="25%"  align="center" style="color:black">'.$fila['nombre'].'</td>
                            <td width="25%"  align="center" style="color:black">'.$fila['profesor_rut'].'</td>
                        </tr>';
    }

    $conn->close();
}
