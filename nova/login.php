<!DOCTYPE html>
<?php include 'utils/helpers.php';
ob_start()
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Inicio de sesion</title>
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
                        <h1>Iniciar sesion</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title -->
        <div  style="margin-top: 50px; margin-bottom: 20px; margin-left: 15%; float:left; border-right-style: dashed; padding-right: 15px">
            <form id="main-contact-form" method="post" action="login.php">
                <div>
                    <div class="span5">
                        <label><strong>RUT</strong></label>
                        <input type="text" id="rut" name="rut" class="input-block-level" required="required" placeholder="Ingresa tu RUT" size="200px">
                        <label><strong>Contraseña</strong></label>
                        <input type="password" id="passw" name="passw" class="input-block-level" required="required" placeholder="Ingresa tu contraseña" size="200px">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-large" style="margin-top: 20px; margin-left: 30px">Iniciar Sesion</button>

            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $rut = $_POST['rut'];
                $pass = $_POST['passw'];
                $user_id = login($rut, $pass);
                if ($user_id == FALSE) {
                    echo '<div class="alert alert-danger">';
                    echo 'Rut o contraseña incorrectos';
                    echo '</div>';
                } else {
                    $_SESSION['user_id'] = $user_id;
                    $profile_id = get_profile_id($user_id);
                    if ($profile_id == 1) {
                        // Administrador
                        redirect("BienvenidoADM.php");
                    } else {
                        // Usuario normal
                        redirect("index.php");
                    }
                }
            }
            ?>
        </div>
        <div style="float:left; margin-top: 50px; margin-bottom: 20px; margin-left: 50px; padding-left: 15px">
            <h2>¿Olvidaste tu contraseña?</h2>
            <p>Ponte en contacto con nosotros para solucionar tu problema. </p>
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


        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
