<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite modificar los datos del alumno en la base de datos.
 * @author Grupo de trabajo
 */
function actualizarAlumno(alumno $alumno) {
        $conn = connect();
        $sql = "update alumno set nombre='".$alumno->getNombre()."', apellido='".$alumno->getApellido()."', nacimiento='".$alumno->getFechaNacimiento()."', correo='".$alumno->getCorreo()."', direccion='".$alumno->getDireccion()."', curso_idcurso=".$alumno->getCurso()." where rut='".$alumno->getRut()."'";
        if ($conn->query($sql) === FALSE) {
            echo '<div class="alert alert-danger" style="width:85%">';
            echo 'Error al actualizar el alumno: ' . $conn->error;
            echo '</div>';
        } else {
            redirect('MostrarAlumnos.php');
        }
        $conn->close();
}