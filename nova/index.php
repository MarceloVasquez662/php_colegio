<!DOCTYPE html>
<?php include 'utils/helpers.php'?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Inicio</title>
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

    <!--Slider-->
    <section id="slide-show">
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/002.png" alt=""  />
                        <h2>Liceo Mater Populi Dei</h2>
                        <br>
                        <a class="btn btn-large btn-transparent" href="about-us.php">Conocenos</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/133.png" alt="" />
                        <h2>Atento a las noticias!</h2>
                        <h3 class="gap">Mantente informado en la seccion de noticias.</h3>
                        <a class="btn btn-large btn-transparent" href="blog.php">Noticias</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                       <img class="pull-right" src="images/sample/slider/img8.png" alt="" />
                    <h2>Galeria de nuestro Liceo</h2>
                    <h3 class="gap">Observa nuestra galeria de imagenes para ver un poco mas sobre nosotros.</h3>
                    <a class="btn btn-large btn-transparent" href="portfolio.php">Galeria</a>
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4>Tienes alguna duda o sugerencia?</h4>
                <p class="no-margin">Pulsa el boton, llena el formulario y nosotros te daremos una respuesta lo antes posible.</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="contact-us.php">Contactanos</a>
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>¿Que te podemos entregar?</h3>
            <p class="lead">Te presentamos algunos aspectos que hacen que tu vida estudiantil sean mas comodas</p>
<iframe width="850" height="520" src="https://www.youtube.com/embed/KQOxcMQmnFc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<!--/Services-->

<section id="recent-works" style="background: #fff">
    <div class="container" style="color: rgb(52, 73, 94)">
        <div class="center">
            <h3>Actividades</h3>
            <p class="lead">Observa algunas de nuestras actividades</p>
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/222.png">
                </div>
                <div class="desc">
                    <h5>El liceo esta comprometido con el medio ambiente</h5>
                </div>              
            </li>
            <!--/Item 2--> 
             <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/ambiente.png">
                </div>
                <div class="desc">
                    <h5>Fomentamos las artes</h5>
                </div>              
            </li>
            <!--/Item 3--> 
             <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/100.png">
                </div>
                <div class="desc">
                    <h5>Corrida San Jose 2018</h5>
                </div>              
            </li>
             <!--/Item 4--> 
             <li>
                <div class="preview">
                    <img alt=" " src="images/portfolio/thumb/99.png">
                </div>
                <div class="desc">
                    <h5>Comprometidos con la Iglecia</h5>
                </div>              
            </li>
        </ul>
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

            <!--Important Links-->
            <!--Important Links-->
    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

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
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>