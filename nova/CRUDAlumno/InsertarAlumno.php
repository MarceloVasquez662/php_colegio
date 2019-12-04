<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite insertar a los alumnos en la base de datos, para luego poder trabajar con sus datos.
 * @author Grupo de trabajo
 */
function insertarAlumno(alumno $alumno) {
        $conn = connect();
        $passwordScript = crypt($alumno->getRut(), "foo");
        $sql = "insert into alumno (rut, nombre, apellido, nacimiento, correo, pass, usuario_idusuario, direccion, curso_idcurso) ";
        $sql .= "values ('" . $alumno->getRut() . "', '" . $alumno->getNombre() . "', '" . $alumno->getApellido() . "', '" . $alumno->getFechaNacimiento() . "', '" . $alumno->getCorreo() . "', '" . $passwordScript . "', 3,'" . $alumno->getDireccion() . "'," . $alumno->getCurso() . ")";
        if ($conn->query($sql) === FALSE) {
            echo '<div class="alert alert-danger" style="width:85%">';
            echo 'Error al ingresar el alumno: ' . $conn->error;
            echo '</div>';
        } else {
            echo '<div class="alert alert-success" style="width:85%">';
            echo 'Alumno ingresado en el sistema ';
            echo '</div>';
        }
        $conn->close();
}
