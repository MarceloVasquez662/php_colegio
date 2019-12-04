<?php

/**
 * Esta funcion logra conectar la base de datos diseñada y da el acceso a todas las demas funciones para trabajar sobre la misma.
 * @author Grupo de trabajo
 */
function connect() {
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "mydb";
    $conn = new mysqli($host, $username, $passwd, $dbname);
    if ($conn->error) {
        die("Error de conexion: ".$conn->error);
    }
    return $conn;
}

