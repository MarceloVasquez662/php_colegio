<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase nos permite suprimir los datos de un curso, para no poder visualizar ni trabajar con sus datos.
 * @author Grupo de trabajo
 */
function eliminarCurso($cursoEliminado) {
    $conn = connect();
    $sql3 = "delete from curso_has_asignatura where curso_idcurso=". $cursoEliminado ."";
    $sql2 = "update alumno set curso_idcurso=0 where curso_idcurso='".$cursoEliminado."'";
    $sql1 = "delete from curso where idcurso='" . $cursoEliminado . "'";
    $result2 = $conn->query($sql2);
    $result1 = $conn->query($sql1);
    $conn->close();
}