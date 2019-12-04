<?php

include 'conection.php';

/**
 * Esta funcion no permite poder iniciar sesion y mantener un control de quien entra en el sistema.
 * @author Grupo de trabajo
 */
function login($rut, $pass) {
    $hashed_pass = crypt($pass, "foo");
    $conn = connect();
    $sql = "select * from administrador where rut = '" . $rut . "' and pass = '" . $hashed_pass . "'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["rut"];
        }
    } else {
        return FALSE;
    }
}

/**
 * Esta funcion nos permite obtener que tipo de usuario esta accediendo, para mantener el control de usuarios.
 * @author Grupo de trabajo
 */
function get_profile_id($user_id) {
    $conn = connect();
    $sql = "select * from administrador where rut= '" . $user_id . "'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["usuario_idusuario"];
        }
    } else {
        return FALSE;
    }
}

/**
 * Esta funcion nos ayuda a llenar un select en HTML para poder escoger los profesores
 * @author Grupo de trabajo
 */
function seleccionarProfesores() {
    $conn = connect();
    $sql = "select * from profesor where rut!='0'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<option value=' . $fila['rut'] . '>' . $fila['nombre'] . ' '.$fila['apellido'].'</option>';
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a llenar un select en HTML para poder escoger un curso
 * @author Grupo de trabajo
 */
function seleccionarCursos() {
    $conn = connect();
    $sql = "select * from curso where idcurso!=0";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<option value=' . $fila['idcurso'] . '>' . $fila['nombre'] . '</option>';
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a buscar los cursos sin profesor, para poder seleccionarlos e ingresarles uno.
 * @author Grupo de trabajo
 */
function seleccionarCursosSinProfe() {
    $conn = connect();
    $sql = "select * from curso where profesor_rut = '0'  ";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<option value=' . $fila['idcurso'] . '>' . $fila['nombre'] . '</option>';
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a llenar una tabla que tenga la funcion de poder seleccionar varios alumnos a la vez para eliminar muchos registros.
 * @author Grupo de trabajo
 */
function seleccionarAlumnosEliminar() {
    $conn = connect();
    $sql = "select * from alumno";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<div id=' . $fila['rut'] . '> <tr> <td width=9.37% align="center" style="color:black">' . $fila['rut'] . '</td> <td width=9.37% align="center" style="color:black">' . $fila['nombre'] . '</td> <td width=9.37% align="center" style="color:black">' . $fila['apellido'] . '</td> <td width=9.37% align="center" style="color:black">' . $fila['nacimiento'] . '</td> <td width=9.37% align="center" style="color:black">' . $fila['correo'] . '</td> </td> <td width=9.37% align="center" style="color:black"> ' . $fila['direccion'] . '</td> <td width=9.37% align="center" style="color:black">' . $fila['curso_idcurso'] . '</td> <td align=center width=%9.37><input type=checkbox name=alumnos[] value=' . $fila['rut'] . '></td> </tr> </div>';
    }

    $conn->close();
}


/**
 * Esta funcion nos ayuda a llenar una tabla que tenga la funcion de poder seleccionar varios profesores a la vez para eliminar muchos registros.
 * @author Grupo de trabajo
 */
function seleccionarProfesoresEliminar() {
    $conn = connect();
    $sql = "select * from profesor where rut!='0'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<div id=' . $fila['rut'] . '> <tr> <td width=10.71% align="center" style="color:black">' . $fila['rut'] . '</td> <td width=10.71% align="center" style="color:black">' . $fila['nombre'] . '</td> <td width=10.71% align="center" style="color:black">' . $fila['apellido'] . '</td> <td width=10.71% align="center" style="color:black">' . $fila['nacimiento'] . '</td> <td width=10.71% align="center" style="color:black">' . $fila['correo'] . '</td> </td> <td width=10.71% align="center" style="color:black"> ' . $fila['direccion'] . '</td> <td align=center width=%10.71><input type=checkbox name=profesores[] value=' . $fila['rut'] . '></td> </tr> </div>';
    }

    $conn->close();
}


/**
 * Esta funcion nos ayuda a llenar una tabla que tenga la funcion de poder seleccionar varios cursos a la vez para eliminar muchos registros.
 * @author Grupo de trabajo
 */
function seleccionarCursosEliminar() {
    $conn = connect();
    $sql = "select * from curso where idcurso!=0";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<div id=' . $fila['idcurso'] . '> <tr> <td width=18.75% align="center" style="color:black">' . $fila['idcurso'] . '</td> </td> <td width=18.75% align="center" style="color:black"> ' . $fila['nombre'] . '</td> <td width=18.75% align="center" style="color:black"> ' . $fila['profesor_rut'] . '</td> <td align=center width=%18.75><input type=checkbox name=cursos[] value=' . $fila['idcurso'] . '></td> </tr> </div>';
    }

    $conn->close();
}


/**
 * Esta funcion nos ayuda a obtener el nombre del alumno mediante el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerNombreAlumno($rut)
{
    $conn = connect();
    $sql = "select * from alumno where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['nombre'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener la direccion del alumno con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerDireccionAlumno($rut)
{
    $conn = connect();
    $sql = "select * from alumno where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['direccion'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener el correo del alumno con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerCorreoAlumno($rut)
{
    $conn = connect();
    $sql = "select * from alumno where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['correo'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener el apellido del alumno con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerApellidoAlumno($rut)
{
    $conn = connect();
    $sql = "select * from alumno where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['apellido'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener la fecha de nacimiento del alumno con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerNacimientoAlumno($rut)
{
    $conn = connect();
    $sql = "select * from alumno where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['nacimiento'];
    }

    $conn->close();
}


/**
 * Esta funcion nos ayuda a obtener el curso del alumno con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerCursoAlumno($rut)
{
    $conn = connect();
    $sql = "select * from alumno join curso on alumno.curso_idcurso=curso.idcurso where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        if($fila['nombre']=='0')
        {
            return $nombre="Seleccione un curso";
        }
        else
        {
            return $nombre=$fila['nombre'];
        }
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener el id del curso con el nombre ingresado.
 * @author Grupo de trabajo
 */
function obtenerIDCursoAlumno($nombrecurso)
{
    $conn = connect();
    $sql = "select * from curso where nombre='".$nombrecurso."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['idcurso'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a llenar un select en HTML para poder elegirlo al momento de actualizar el alumno.
 * @author Grupo de trabajo
 */
function seleccionarCursosActualizar($idcurso) {
    $conn = connect();
    $sql = "select * from curso where idcurso!=".$idcurso." and idcurso!=0";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<option value=' . $fila['idcurso'] . '>' . $fila['nombre'] . '</option>';
    }

    $conn->close();
}


/**
 * Esta funcion nos ayuda a obtener el nombre del profesor con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerNombreProfesor($rut)
{
    $conn = connect();
    $sql = "select * from profesor where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['nombre'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener la direccion del profesor con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerDireccionProfesor($rut)
{
    $conn = connect();
    $sql = "select * from profesor where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['direccion'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener el correo del profesor con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerCorreoProfesor($rut)
{
    $conn = connect();
    $sql = "select * from profesor where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['correo'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener el apellido del profesor con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerApellidoProfesor($rut)
{
    $conn = connect();
    $sql = "select * from profesor where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['apellido'];
    }

    $conn->close();
}

/**
 * Esta funcion nos ayuda a obtener la fecha de nacimiento del profesor con el rut ingresado.
 * @author Grupo de trabajo
 */
function obtenerNacimientoProfesor($rut)
{
    $conn = connect();
    $sql = "select * from profesor where rut='".$rut."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['nacimiento'];
    }

    $conn->close();
}
 

/**
 * Esta funcion nos ayuda a obtener el nombre de la asignatura con el id ingresado.
 * @author Grupo de trabajo
 */
function obtenerNombreAsignatura($IDAsignatura)
{
    $conn = connect();
    $sql = "select * from asignatura where id='".$IDAsignatura."'";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        return $nombre=$fila['nombre'];
    }

    $conn->close();
}
    
/**
 * Esta funcion nos ayuda a llenar una tabla que tenga la funcion de poder seleccionar varias asignaturas a la vez para eliminar muchos registros.
 * @author Grupo de trabajo
 */
    function seleccionarAsignaturaEliminar() {
    $conn = connect();
    $sql = "select * from asignatura";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<div id=' . $fila['id'] . '> <tr> <td width=25% align="center" style="color:black">' . $fila['id'] . '</td> </td> <td width=25% align="center" style="color:black"> ' . $fila['nombre'] . '</td> <td align=center width=25%><input type=checkbox name=asignaturas[] value=' . $fila['id'] . '></td> </tr> </div>';
    }

    $conn->close();
}

/**
 * Esta funcion imprime una tabla para poder ver la asociacion entre los cursos y las asignaturas que anteriormente fueron asignadas.
 * @author Grupo de trabajo
 */
function seleccionarAsignaturaCurso() {
    $conn = connect();
    $sql = "select curso.nombre as curso_nombre, asignatura.nombre as asignatura_nombre from asignatura join curso_has_asignatura on asignatura.id = curso_has_asignatura.asignatura_id join curso on curso_has_asignatura.curso_idcurso = curso.idcurso";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<tr>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['curso_nombre'].'</td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['asignatura_nombre'].'</td>
              </tr>';
    }

    $conn->close();
}

/**
 * Esta funcion imprime una tabla para poder ver la asociacion entre los profesores y las asignaturas que anteriormente fueron asignadas.
 * @author Grupo de trabajo
 */
function seleccionarAsignaturaProfesor() {
    $conn = connect();
    $sql = "select profesor.rut, asignatura.nombre from asignatura join profesor_has_asignatura on asignatura.id = profesor_has_asignatura.asignatura_id join profesor on profesor_has_asignatura.profesor_rut = profesor.rut";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<tr>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['rut'].'</td>
                            <td width="12.5%"  align="center" style="color:black">'.$fila['nombre'].'</td>
              </tr>';
    }

    $conn->close();
}

/**
 * Esta funcion imprime una tabla con las asignaturas para poder realizar las asignaciones al curso y al profesor.
 * @author Grupo de trabajo
 */
function seleccionarAsignaturasProfesor() {
    $conn = connect();
    $sql = "select * from asignatura";
    $result = $conn->query($sql);

    while ($fila = $result->fetch_assoc()) {
        echo '<tr>
                     <td width="12.5%"  align="center" style="color:black">'.$fila['nombre'].'</td><td align=center width=%9.37><input type=checkbox name=asignaturas[] value=' . $fila['id'] . '>
              </tr>';
    }

    $conn->close();
}

/**
 * Esta funcion permite la asignacion de una asignatura a un profesor, que se insertar en una tabla de la base de datos.
 * @author Grupo de trabajo
 */
function asignarAsignaturaProfesor($ingresados, $rut) {
    $conn = connect();
    $sql= "insert into profesor_has_asignatura values ('".$rut."', ".$ingresados.") ";
    $result1 = $conn->query($sql1);
    if ($conn->query($sql) === FALSE) {
            echo '<div class="alert alert-danger" style="width:85%">';
            echo 'Error al asignar las asignaturas: ' . $conn->error;
            echo '</div>';
        } else {
            echo '<div class="alert alert-success" style="width:85%">';
            echo 'Se han asignado las asignaturas al profesor';
            echo '</div>';
        }
    $conn->close();
}

/**
 * Esta funcion permite la asignacion de una asignatura a un curso, que se insertar en una tabla de la base de datos.
 * @author Grupo de trabajo
 */
function asignarAsignaturaCurso($ingresados, $id) {
    $conn = connect();
    $sql= "insert into curso_has_asignatura values (".$id.", ".$ingresados.") ";
    $result1 = $conn->query($sql1);
    if ($conn->query($sql) === FALSE) {
            echo '<div class="alert alert-danger" style="width:85%">';
            echo 'Error al asignar las asignaturas: ' . $conn->error;
            echo '</div>';
        } else {
            echo '<div class="alert alert-success" style="width:85%">';
            echo 'Se han asignado las asignaturas al curso';
            echo '</div>';
        }
    $conn->close();
}


    