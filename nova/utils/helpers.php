<?php
session_start();
include 'baseDeDatos/usuarios.php';
include 'modelo/alumno.php';
include 'modelo/profesor.php';
include 'modelo/curso.php';
include 'modelo/asignatura.php';
include 'CRUDAlumno/InsertarAlumno.php';
include 'CRUDAlumno/ActualizarAlumno.php';
include 'CRUDAlumno/EliminarAlumno.php';
include 'CRUDAlumno/SeleccionarAlumno.php';
include 'CRUDAsignatura/ActualizarAsignatura.php';
include 'CRUDAsignatura/EliminarAsignatura.php';
include 'CRUDAsignatura/InsertarAsignatura.php';
include 'CRUDAsignatura/SeleccionarAsignatura.php';
include 'CRUDCurso/ActualizarCurso.php';
include 'CRUDCurso/EliminarCurso.php';
include 'CRUDCurso/InsertarCurso.php';
include 'CRUDCurso/SeleccionarCurso.php';
include 'CRUDProfesor/ActualizarProfesor.php';
include 'CRUDProfesor/EliminarProfesor.php';
include 'CRUDProfesor/InsertarProfesor.php';
include 'CRUDProfesor/SeleccionarProfesor.php';

/**
 * Esta funcion nos ayuda a redireccionar desde una pagina a otra.
 * @author Grupo de trabajo
 */
function redirect($page) {
    header("Location: http://localhost/proyectoLiceo/nova/".$page);
}

/**
 * Esta funcion nos ayuda a escribir un menu personalizado dependiendo del tipo de usuario que haya ingresado al sistema.
 * @author Grupo de trabajo
 */
function write_user_menu() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        write_private_menu();
    } else {
        echo '<li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="about-us.php">Acerca de nosotros</a></li>
                        <li><a href="portfolio.php">Galeria</a></li> 
                        <li><a href="contact-us.php">Contacto</a></li>
                        <li><a href="login.php">Acceder</a></li>';
    }
}

/**
 * Esta funcion nos ayuda a escribir un menu personalizado para el administrador, desde donde podra acceder a todas las funcionalidades de la pagina.
 * @author Grupo de trabajo
 */
function write_private_menu() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $profile_id = get_profile_id($user_id);
        if ($profile_id == 1) {
            echo '
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inserciones<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="IngresarProfesor.php">Insertar Profesor</a></li>
                                <li><a href="IngresarAlumno.php">Insertar Alumno</a></li>
                                <li><a href="IngresarCurso.php">Insertar Curso</a></li>
                                <li><a href="IngresarAsignatura.php">Insertar Asignatura</a></li>
                                <li><a href="IngresarProfesorCurso.php">Agregar profesor a un curso</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mostrar y actualizar<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="MostrarProfesores.php">Mostrar Profesores</a></li>
                                <li><a href="MostrarAlumnos.php">Mostrar Alumnos</a></li>
                                <li><a href="MostrarCursos.php">Mostrar Cursos</a></li>
                                <li><a href="MostrarAsignaturas.php">Mostrar Asignaturas</a></li>
                                <li><a href="MostrarAsignaturaProfesor.php">Mostrar Asignaturas/Profesor</a></li>
                                <li><a href="MostrarAsignaturaCurso.php">Mostrar Asignatura/Curso</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eliminaciones<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="EliminarAlumnos.php">Eliminar Alumno</a></li>
                                <li><a href="EliminarProfesor.php">Eliminar Profesor</a></li>
                                <li><a href="EliminarCurso.php">Eliminar Curso</a></li>
                                <li><a href="EliminarAsignatura.php">Eliminar Asignatura</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Asignaciones<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="AsignaturaProfesor.php">Asignar asignatura a profesor</a></li>
                                <li><a href="AsignaturaCurso.php">Asignar asignatura a un curso</a></li>
                            </ul>
                        </li>
                        <li><a  href="logout.php">Cerrar Sesion</a></li>
                         ';
        }
        } else {
            // no hacemos nada
        } 
    }

/**
 * Esta function obliga al usuario a estar logeado para poder ingresar a alguna pagina que son solo para usuarios que hayan iniciado sesion.
 * @author Grupo de trabajo
 */
function userlogin_obligated() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $profile_id = get_profile_id($user_id);
    if ($profile_id ==2 || $profile_id==1 || $profile_id==3) {
        }
    } else {
        redirect("login.php");
    }
}

/**
 * Esta function nos permite definir pagina que son solo para administradores, y asi limitar los usuarios que pueden entrar a la pagina.
 * @author Grupo de trabajo
 */
function admin_only() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $profile_id = get_profile_id($user_id);
        if ($profile_id != 1) {
            redirect("login.php");
        }
    } else {
    }
}
