<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite modificar los datos de una asignatura en la base de datos.
 * @author Grupo de trabajo
 */
function actualizarAsignatura(asignatura $asignatura) {
        $conn = connect();
        $sql = "update asignatura set nombre='".$asignatura->getNombre()."' where id='".$asignatura->getId()."'";
        if ($conn->query($sql) === FALSE) {
            echo '<div class="alert alert-danger" style="width:85%">';
            echo 'Error al actualizar la asignatura: ' . $conn->error;
            echo '</div>';
        } else {
            redirect('MostrarAsignatura.php');
        }
        $conn->close();
}