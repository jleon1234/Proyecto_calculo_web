<?php  include_once('includes/header.php')?>

<!-- Slider -->
<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
        <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div id="home" class="first-section" style="background-image:url('uploads/portada.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="big-tagline">
                                <h3>Calculo Diferencial</h3>
                                <h2 data-animation="animated zoomInRight">Introducción al Cálculo Diferencial</h2>
                                <p class="lead" data-animation="animated fadeInLeft">Entender con propiedad la teoría y fundamentos del cálculo diferencial, para formular y resolver problemas. </p>
                                <a data-scroll href="primera.php" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">Ir al Contenido</a>
                               
                            </div>
                        </div>
                    </div><!-- end row -->            
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
        <div class="item">
            <div id="home" class="first-section" style="background-image:url('uploads/portada_1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="big-tagline">
                                <h3>Cálculo Diferencial</h3>
                                <h2 data-animation="animated zoomInRight">Graficar <strong>Funciones</strong></h2>
                                <p class="lead" data-animation="animated fadeInLeft">Tenemos una App que te ayudar a graficar funciones cuadráticas facilmente. </p>
                                    <a data-scroll href="graficar.php" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">Probar App</a>
                            </div>
                        </div>
                    </div><!-- end row -->            
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
        <div class="item">
            <div id="home" class="first-section" style="background-image:url('uploads/portada_2.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="big-tagline">
                                <h3>Cálculo Diferencial</h3>
                                <h2 data-animation="animated zoomInRight">Derivar <strong>Funciones</strong></h2>
                                <p class="lead" data-animation="animated fadeInLeft">Tenemos una App que te ayuda a derivar las funciones</p>
                                    <a data-scroll href="derivar.php" class="btn btn-light btn-radius btn-brd effect-1 slide-btn" data-animation="animated fadeInLeft">Probar App</a>
                            </div>
                        </div>
                    </div><!-- end row -->            
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>





<?php include_once('includes/footer.php') ?>