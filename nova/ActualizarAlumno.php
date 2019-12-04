<!DOCTYPE html>
<?php
include 'utils/helpers.php';
userlogin_obligated();
admin_only();
ob_start();
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Actualizar Alumno</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/sl-slide.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Le fav and touch icons -->
        <link rel="icon" type="image/png" href="images/ico/logo.png" />
    </head>

    <body>

        <!--Header-->
        <header class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a id="logo" class="pull-left" href="index.php"></a>
                    <div class="nav-collapse collapse pull-right">       
                        <ul class="nav">
<?php write_user_menu(); ?>
                        </ul>     
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>
        <!-- /header -->


        <section class="title">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h1>Actualizar Alumno</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title -->

        <script src="validaciones.js">
        </script>

        <?php
        $rutAlumno = $_GET['rut'];
        $nombre = obtenerNombreAlumno($rutAlumno);
        $direccion = obtenerDireccionAlumno($rutAlumno);
        $correo = obtenerCorreoAlumno($rutAlumno);
        $apellido = obtenerApellidoAlumno($rutAlumno);
        $nacimiento = obtenerNacimientoAlumno($rutAlumno);
        $fecha = obtenerNacimientoAlumno($rutAlumno);
        $curso = obtenerCursoAlumno($rutAlumno);
        $idcurso = obtenerIDCursoAlumno($curso);
        ?>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $rut = $_POST['rut'];
            $direccion = $_POST['direccion'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $apellido = $_POST['apellido'];
            $fechaNacimiento = $_POST['nacimiento'];
            $curso = $_POST['cursos'];
            $alumno = new alumno($rut, $nombre, $apellido, $fechaNacimiento, $correo, $direccion, $curso);
            echo actualizarAlumno($alumno);
        }
        ?>
        <div  style="margin-top: 50px; margin-bottom: 50px; margin-left: 10%; " >
            <form id="ingresoAlumno"  name="ingresoAlumno" method="post" action="ActualizarAlumno.php" onsubmit="return validarIngresoAlumno()">
                <div>
                    <div class="span5">
                        <label><strong>RUT</strong></label>
                        <input type="text" id="rut" name="rut" required="required" placeholder="Ingrese su rut" value="<?php echo $rutAlumno ?>" style="width: 92%" readonly > 
                        <label><strong>Direccion</strong></label>
                        <input type="text" id="direccion" name="direccion" required="required" placeholder="Ingrese su direccion" value="<?php echo $direccion ?>" style="width: 92%" >
                    </div>
                    <div class="span5">
                        <label><strong>Nombre</strong></label>
                        <input type="text" id="nombre" name="nombre" required="required" placeholder="Ingrese su nombre" value="<?php echo $nombre ?>" style="width: 92%" > 
                        <label><strong>Correo Electronico</strong></label>
                        <input type="email" id="correo" name="correo" required="required" placeholder="Ingrese su correo" value="<?php echo $correo ?>"  style="width: 92%" > 
                    </div>
                    <div class="span5">
                        <label><strong>Apellidos</strong></label>
                        <input type="text" id="apellido" name="apellido" required="required" placeholder="Ingrese su apellido" value="<?php echo $apellido ?>" style="width: 92%" > 
                        <label><strong>Fecha de nacimiento</strong></label>
                        <input type="date" id="nacimiento" name="nacimiento" required="required" value="<?php echo $fecha ?>" style="width: 92%" > 
                    </div> 
                </div>
                <div class="span5" style="margin-left: 13%; width:87% "> 
                    <label><strong>Curso</strong></label>
                    <select name="cursos" id="cursos" style="width: 75%">
                        <option value="Seleccione un curso" >Seleccione un curso</option>
                        <option value="<?php echo $idcurso ?>" selected="selected"><?php echo $curso ?></option>
                        <?php
                        echo seleccionarCursosActualizar($idcurso);
                        ?>
                    </select>
                </div>
                <div style="margin-bottom: 50px; margin-left: 13%;">
                    <button type="submit" class="btn btn-primary btn-large" style="margin-top: 20px;margin-bottom: 20px; width: 75%">Actualizar Alumno</button>
                </div> 
            </form>
        </div>

        <!--Bottom-->
        <section id="bottom" class="main" style="clear: both">
            <!--Container-->
            <div class="container">

                <!--row-fluids-->
                <div class="row-fluid">
                    <!--Contact Form-->
                    <div class="span3">
                        <h4>Nuestros Datos</h4>
                        <ul class="unstyled address">
                            <li>
                                <i class="icon-home"></i><strong>Dirección:</strong> Padre Plácido N° 67
                                San José de la Mariquina. <br> Región de los Ríos
                            </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <strong>Email: </strong> materpopulidei@gmail.com 
                            </li>
                            <li>
                                <i class="icon-phone"></i>
                                <strong>Fono:</strong> (632)278578 
                            </li>
                        </ul>
                    </div>
                    <!--End Contact Form-->
                    <!--/row-fluid-->
                </div>
                <!--/container-->
</div>
        </section>
        <!--/bottom-->

        <!--Footer-->
        <footer id="footer">
            <div class="container">
                <div class="row-fluid">
                    <div class="span5 cp">
                        &copy; <a target="_blank">Liceo Mater Populi Dei</a>.
                    </div>
                    <!--/Copyright-->

                    <div class="span1" align="right">
                        <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                    </div>
                    <!--/Goto Top-->
                </div>
            </div>
        </footer>
        <!--/Footer-->

        <!--  Login form -->
        <div class="modal hide fade in" id="loginForm" aria-hidden="false">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
                <h4>Inicia sesion</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-inline" action="index.php" method="post" id="form-login">
                    <input type="text" class="input-small" placeholder="RUT">
                    <input type="password" class="input-small" placeholder="Contraseña">
                    <button type="submit" class="btn btn-primary">Inicia Sesion</button>
                </form>
            </div>
            <!--/Modal Body-->
        </div>
        <!--  /Login form -->

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
