<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('sources/fonts/iconfinder_DaemonTools_78993.ico')?>">
  
    <title>Usuarios</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css/shake.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('sources/css2/carousel.css')?>">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Invirtual</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Un link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Uno deshabilitado</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo base_url('sources/fonts/faro.jpg')?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Primer slide</h1>
                <p>Texto si es que va haber</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Boton</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo base_url('sources/fonts/huella.png')?>" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Segundo slide</h1>
                <p>Más texto</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Otro</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo base_url('sources/fonts/planeta.png')?>" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Tercer slide</h1>
                <p>Más texto</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Otro mas</a></p>
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
            <img class="rounded-circle" src="<?php echo base_url('sources/fonts/faro.jpg')?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Titulo imagen</h2>
            <p>Texto de eso</p>
            <p><a class="btn btn-secondary" href="#" role="button">Boton imagen &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url('sources/fonts/huella.png')?>" alt="Generic placeholder image" width="140" height="140">
            <h2>La segunda</h2>
            <p>Otra vez texto de esa imagen de arriba</p>
            <p><a class="btn btn-secondary" href="#" role="button">Ver detalles &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url('sources/fonts/planeta.png')?>" alt="Generic placeholder image" width="140" height="140">
            <h2>La tercera</h2>
            <p>Otra vez, lo mismo pero en la tercera</p>
            <p><a class="btn btn-secondary" href="#" role="button">Si quieres &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Encabezado del faro <span class="text-muted">Texto más claro sobre el faro</span></h2>
            <p class="lead">Texto que habla sobre el faro, lo que quieran poner</p>
          </div>
          <div class="col-md-5">
              <img src="<?php echo base_url('sources/fonts/faro.jpg')?>">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-6 order-md-2">
            <h2 class="featurette-heading">¡Oh otra imagen! <span class="text-muted">Una huella digital</span></h2>
            <p class="lead">Una huella digital</p>
          </div>
          <div class="col-md-6 order-md-1">
            <img src="<?php echo base_url('sources/fonts/triangulo.jpg')?>">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Y la última <span class="text-muted">El planeta con personas y animales</span></h2>
            <p class="lead">Una representación sobre el planeta, parece ser...</p>
          </div>
          <div class="col-md-5">
            <img src="<?php echo base_url('sources/fonts/planeta.png')?>">
          </div>
        </div>

        <hr class="featurette-divider">

        

      </div><!-- /.container -->

      

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Invirtual. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
      </footer>
    </main>

   
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/jquery-3.1.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="sources/js2/bootstrap.js"><\/script>')</script>
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/popper.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>sources/js2/holder.min.js"></script>
  </body>
</html>
