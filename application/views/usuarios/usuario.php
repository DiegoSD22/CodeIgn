<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('sources/fonts/iconfinder_DaemonTools_78993.ico')?>">
  
    <title>Usuarios</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/shake.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/carousel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/cirrus.css')?>">
        
    
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-cloud"></span> InvirtualWeb </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span> Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-link"></span> Un link </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-fire"></span> Otro </a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <!--<input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">-->
              <a href="<?php echo base_url() ?>index.php/consulta/inicioSesion" id="btnLogin" class="smoothScroll"><button class="btn-outline center btn-animated">Inicio Sesion</button></a>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

        
        
        <!--Carousel-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo base_url('sources/fonts/proof.jpg')?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Primer slide</h1>
                <p>Texto si es que va haber</p>
                <p><a class="this-inline-block" href="#"><button class="btn-primary">Boton</button></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo base_url('sources/fonts/proof2.jpg')?>" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Segundo slide</h1>
                <p>Más texto</p>
                <p><a class="this-inline-block" href="#"><button class="btn-primary">Otro</button></a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo base_url('sources/fonts/proof3.jpg')?>" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Tercer slide</h1>
                <p>Más texto</p>
                <p><a class="this-inline-block" href="#"><button class="btn-primary">Otro mas</button></a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> 
      </div>


      <div class="container marketing">

        
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle hover-grow" src="<?php echo base_url('sources/fonts/faro.jpg')?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Titulo imagen</h2>
            <p>Texto de eso</p>
            <p><a class="btn btn-warning" href="#" role="button">Boton imagen &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle hover-grow" src="<?php echo base_url('sources/fonts/huella.png')?>" alt="Generic placeholder image" width="140" height="140">
            <h2>La segunda</h2>
            <p>Otra vez texto de esa imagen de arriba</p>
            <p><a class="btn btn-warning" href="#" role="button">Ver detalles &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle hover-grow" src="<?php echo base_url('sources/fonts/planeta.png')?>" alt="Generic placeholder image" width="140" height="140">
            <h2>La tercera</h2>
            <p>Otra vez, lo mismo pero en la tercera</p>
            <p><a class="btn btn-warning" href="#" role="button">Si quieres &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Encabezado del faro <span class="text-muted">Texto más claro sobre el faro</span></h2>
            <p class="lead">Texto que habla sobre el faro, lo que quieran poner</p>
          </div><!-- /.col-md-7 -->
          <div class="col-md-5">
              <img src="<?php echo base_url('sources/fonts/faro.jpg')?>">
          </div><!-- /.col-md-5 -->
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-6 order-md-2">
            <h2 class="featurette-heading">¡Oh, otra imagen! <span class="text-muted">Una huella digital</span></h2>
            <p class="lead">Una huella digital</p>
          </div><!-- /.col-md-6 order-md-2 -->
          <div class="col-md-6 order-md-1">
            <img src="<?php echo base_url('sources/fonts/triangulo.jpg')?>">
          </div><!-- /.col-md-6 order-md-1 -->
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Y la última <span class="text-muted">El planeta con personas y animales</span></h2>
            <p class="lead">Un planeta...</p>
          </div><!-- /.col-md-7 -->
          <div class="col-md-5">
            <img src="<?php echo base_url('sources/fonts/planeta.png')?>">
          </div><!-- /.col-md-5 -->
        </div>

        <hr class="featurette-divider">

        

      </div><!-- /.container -->

      

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Volver arriba</a></p>
        <p>&copy; 2018 InvirtualWeb. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
      </footer>
    </main>

   
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/jquery-3.1.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="sources/js2/bootstrap.js"><\/script>')</script>
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/popper.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/holder.min.js"></script>
    
  </body>
</html>
