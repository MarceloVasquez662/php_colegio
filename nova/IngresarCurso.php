<!DOCTYPE html>
<?php
include 'utils/helpers.php';
userlogin_obligated();
ob_start();
admin_only();
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ingresar Curso</title>
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
                        <h1>Crear Curso</h1>
                    </div>
                </div>
            </div>
        </section>

        <script src="validaciones.js">


        </script>

        <section id="contact-page" class="container">
            <div class="row-fluid">

                <div class="">
                    <div class="status alert alert-success" style="display: none"></div>

                    <form id="ingresoCurso" name="ingresoCurso" method="post" action="IngresarCurso.php" onsubmit="return validarCrearCurso()">
                        <div class="row-fluid">
                            <div class="span5">
                                <label>Nombre Curso</label>
                                <input type="text" id="nombre" name="nombre" class="input-block-level" required="required" placeholder="Curso">
                                <label>Codigo Curso</label>
                                <input type="text" id="codigo" name="codigo" class="input-block-level" required="required" placeholder="Codigo">
                                <label>Profesor Jefe</label>
                                <select id="rutJefe" name="rutJefe" class="input-block-level">
                                    <option value="Seleccione un profesor">Seleccione un Profesor</option>
                                    <?php
                                    echo seleccionarProfesores();
                                    ?>
                                </select>
                            </div>   
                        </div>
                        <button type="submit" class="btn btn-primary btn-large" >Crear Curso</button>
                        <p> </p>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $nombreCurso = $_POST['nombre'];
                        $codigoCurso = $_POST['codigo'];
                        $rutJefe = $_POST['rutJefe'];
                        $curso = new curso($codigoCurso, $nombreCurso, $rutJefe);
                        echo insertarCurso($curso);
                    }
                    ?>
                </div>



            </div>

        </section>

        <!--Bottom-->
        <section id="bottom" class="main">
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
