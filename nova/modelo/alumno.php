<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Esta clase representa al alumno, que tiene como atributos el rut, nombre, apellido, fecha de nacimiento, correo, direccion y curso.
 * Este es uno de los principales dentro de la base de datos, ya que guarda los valores que mas utilizara el colegio.
 * @author Grupo de trabajo
 */
class alumno {
    //put your code here
    private  $rut;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $correo;
    private $direccion;
    private $curso;
    
    function __construct($rut, $nombre, $apellido, $fechaNacimiento, $correo, $direccion, $curso) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->correo = $correo;
        $this->direccion = $direccion;
        $this->curso = $curso;
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

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCurso() {
        return $this->curso;
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

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}
