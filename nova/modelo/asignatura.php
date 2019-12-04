<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase representa a la asignatura, que tiene como atributos el id y el nombre.
 * Este guarda las materias principales del colegio, para luego asociarlas a curso y profesores.
 * @author Grupo de trabajo
 */
class asignatura {
    //put your code here
    private $id;
    private $nombre;
    
    function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }



}
