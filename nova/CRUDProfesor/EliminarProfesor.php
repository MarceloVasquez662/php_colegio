<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite suprimir los datos de un profesor, para no poder visualizar ni trabajar con sus datos.
 * @author Grupo de trabajo
 */
function eliminarProfesor($profesorEliminado) {
    $conn = connect();
    $sql3 = "delete from profesor_has_asignatura where profesor_rut='" . $profesorEliminado . "'";
    $sql2 = "update curso set profesor_rut='0' where profesor_rut='".$profesorEliminado."'";
    $sql1 = "delete from profesor where rut='" . $profesorEliminado . "'";
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result1 = $conn->query($sql1);
    $conn->close();
}