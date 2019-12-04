<!DOCTYPE html>
<?php include 'utils/helpers.php' ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contacto</title>
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

        <section class="no-margin" style="border-bottom:solid 1px #000; border-top: solid 1px #000">
            <iframe width="100%" height="200%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.9979665932424!2d-72.96380858418007!3d-39.53709987947699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9615bb9c23ca9815%3A0x4c17f72fd7f156cb!2sliceo+mater+populi+dei!5e0!3m2!1ses-419!2scl!4v1553543553865"></iframe>
        </section>


        <section id="contact-page" class="container">
            <div class="row-fluid">

                <div class="">
                    <h4>Formulario de Contacto</h4>
                    <div class="status alert alert-success" style="display: none"></div>

                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="row-fluid">
                            <div class="span5">
                                <label>Primer Nombre</label>
                                <input type="text" id="name" class="input-block-level" required="required" placeholder="Tu primer nombre">
                                <label>Apellido</label>
                                <input type="text" class="input-block-level" required="required" placeholder="Tu apellido">
                                <label>Email</label>
                                <input type="email" id="email" class="input-block-level" required="required" placeholder="Tu correo electronico">
                            </div>
                            <div class="span7">
                                <label>Mensaje</label>
                                <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-large pull-right">Enviar Mensaje</button>
                        <p> </p>

                    </form>
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


        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>   

    </body>
</html>
