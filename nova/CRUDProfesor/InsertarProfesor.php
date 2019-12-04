<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite insertar a los profesores en la base de datos, para luego poder trabajar con sus datos.
 * @author Grupo de trabajo
 */
function insertarProfesor(profesor $profesor) {
    $conn = connect();
    $passwordScript = crypt($profesor->getRut(), "foo");
    $sql = "insert into profesor (rut, nombre, apellido, nacimiento, correo, pass, usuario_idusuario, direccion) ";
    $sql .= "values ('".$profesor->getRut()."', '".$profesor->getNombre()."', '". $profesor->getApellido()."', '". $profesor->getFechaNacimiento()."', '". $profesor->getCorreo()."', '". $passwordScript."', 2,'".$profesor->getDireccion()."')";
    if ($conn->query($sql) === FALSE) {
        echo '<div class="alert alert-danger" style="width:85%">';
        echo 'Error al ingresar el profesor: ' . $conn->error;
        echo '</div>';
    } else {
        echo '<div class="alert alert-success" style="width:85%">';
        echo 'Profesor ingresado en el sistema';
        echo '</div>';
    }
    $conn->close();
}
