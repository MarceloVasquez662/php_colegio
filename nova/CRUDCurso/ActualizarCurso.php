<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite modificar los datos de un curso en la base de datos.
 * @author Grupo de trabajo
 */
function actualizarCurso($rutJefe, $curso) {
        $conn = connect();
        $sql = "update curso set profesor_rut='".$rutJefe."' where idcurso = ".$curso." ";
        if ($conn->query($sql) === FALSE) {
            echo '<div class="alert alert-danger" style="width:85%">';
            echo 'Error al agregar el profesor: ' . $conn->error;
            echo '</div>';
        } else {
            redirect('MostrarCursos.php');
        }
        $conn->close();
    }
