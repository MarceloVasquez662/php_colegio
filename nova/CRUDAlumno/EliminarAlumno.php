<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite suprimir los datos de un alumno, para no poder visualizar ni trabajar con sus datos.
 * @author Grupo de trabajo
 */
function eliminarAlumno($alumnoEliminado) {
    $conn = connect();
    $sql1 = "delete from alumno where rut='" . $alumnoEliminado . "'";
    $result1 = $conn->query($sql1);
    $conn->close();
}