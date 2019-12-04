<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase representa al profesor, que tiene como atributos el rut, nombre, apellido, fecha de nacimiento, correo y direccion.
 * Este nos permite guardar todos los datos del profesor, para luego poder asociarlo a las materias y cursos correspondientes.
 * @author Grupo de trabajo
 */
class profesor {
    //put your code here
    private $rut;
    private $nombre;
    private $apellido;
    private $direccion;
    private $correo;
    private $fechaNacimiento;
    
    function __construct($rut, $nombre, $apellido, $direccion, $correo, $fechaNacimiento) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->correo = $correo;
        $this->fechaNacimiento = $fechaNacimiento;
    }
    
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }
}
