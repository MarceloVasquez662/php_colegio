<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase representa al curso, que tiene como atributos el id, nombre y el rut del profesor.
 * Este guarda los datos de los curso, donde, mediante una relacion podemos asociarle alumnos y profesores.
 * @author Grupo de trabajo
 */
class curso {
    //put your code here
    private $id;
    private $nombre;
    private $profesor_rut;
    
    function __construct($id, $nombre, $profesor_rut) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->profesor_rut = $profesor_rut;
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getProfesor_rut() {
        return $this->profesor_rut;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setProfesor_rut($profesor_rut) {
        $this->profesor_rut = $profesor_rut;
    }


}
