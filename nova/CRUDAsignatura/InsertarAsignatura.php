<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite insertar a las asignaturas en la base de datos, para luego poder trabajar con sus datos.
 * @author Grupo de trabajo
 */
function insertarAsignatura(asignatura $asignatura) {
    $conn = connect();
    $sql = "insert into asignatura (id, nombre)";
    $sql .= "values (".$asignatura->getId().", '".$asignatura->getNombre()."')";
    if ($conn->query($sql) === FALSE) {
        echo '<div class="alert alert-danger" style="width:85%">';
        echo 'Error al ingresar la asignatura: ' . $conn->error;
        echo '</div>';
    } else {
        echo '<div class="alert alert-success" style="width:85%">';
        echo 'Asignatura ingresada en el sistema';
        echo '</div>';
    }
    $conn->close();
}