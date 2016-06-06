<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION["idPermiso"])){
  header("location: index.php?hackerMan=2");
}else{
  $idPermiso = $_SESSION["idPermiso"];
  $nombre =$_SESSION["nombre"];
  if($idPermiso == 0){
    session_destroy();
    header("location: index.php?hackerMan=3");
  }


}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>OverWatchers | Las armas del futuro serán debido al pasado</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
  <header id="header" role="banner">
    <div class="container">
      <div id="navbar" class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <a href="controlador/cerrarSesion.php">Cerrar Sesión</a>
            <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
            <li><a href="#pricing">Heroes</a></li>
            <li><a href="#about-us">Usuarios</a></li>
            <li><a href="#contact">Contacto</a></li>

          </ul>
        </div>
      </div>
    </div>
  </header><!--/#header-->

  <section id="main-slider" class="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class="container">
          <div class="carousel-content">
            <h1>OverWatcher's</h1>
            <p class="lead">¡La página del futuro, será recordada por el futuro!</p>
          </div>
        </div>
      </div><!--/.item-->
    </div><!--/.carousel-inner-->
    <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
    <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
  </section><!--/#main-slider-->
  <section id="pricing">
    <div class="container">
      <div class="box">
        <div class="center">
          <h1>Heroes</h1>
          <p class="lead"> Dentro de ésta página podras<br>encontrar, listar y buscar a tus heroés favoritos</p>
        </div><!--/.center-->
        <div class="big-gap"></div>
        <div id="pricing-table" class="row">
          <div class="col-sm-4">
            <ul class="plan">
              <li class="plan-name">Buscar</li>
              <br>
              <div class=""> Busca tu héroe favorito junto a todas sus características.</div>
              <br>
              <?php
              require_once "bd/Data.php";
              $d= new Data();
              switch ($idPermiso) {
                case 1:
                echo "<form  action='controlador/buscarHeroe.php' method='post'>";
                echo "<input type='text' name='txtBuscarHeroe' placeholder='Buscar heroe'>";
                echo "<input type='submit' name='btnBuscar' value='Buscar'>";
                echo '</form>';
                break;
                case 2:
                break;
              }
              ?>
              <br>
            </ul>
          </div><!--/.col-sm-4-->
          <div class="col-sm-4">
          </div><!--/.col-sm-4-->
          <div class="col-sm-4">
            <ul class="plan">
              <li class="plan-name">Listado</li>
              <br>
              <div class="container">
                <?php
                require_once "bd/Data.php";
                $d= new Data();
                switch ($idPermiso) {
                  case 1:
                  $d->listarHeroes();
                  break;
                  case 2:
                  break;
                }
                ?>
              </div>
            </ul>
          </div><!--/.col-sm-4-->
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="about-us">
    <div class="container">
      <div class="box">
        <div class="center">
          <h2>Listado De Usuarios</h2>
          <p class="lead">Nuestra lista de Usuarios<br>Nuestros administradores, Usuarios y Moderadores.</p>
        </div>
        <div class="gap"></div>
        <div id="team-scroller" class="carousel scale">
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <?php
              require_once "bd/Data.php";
              $d= new Data();
              switch ($idPermiso) {
                case 1:
                $d->listarUsuario();
                break;

                break;
              }
              ?>
            </div>
          </div>
        </div>
      </div><!--/.carousel-->
    </div><!--/.box-->
  </div><!--/.container-->
</section><!--/#about-us-->
<br>
<section id="contact">
  <div class="container">
    <div class="box last">
      <div class="row">
        <div class="col-sm-6">
          <h1>Contactanos</h1>
          <p>Si cuentas con algún problema dentro de la pagina ,contacta al servicio oficial</p>
          <div class="status alert alert-success" style="display: none"></div>
          <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Nombre">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Correo Electronico">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-danger btn-lg">Enviar Mensaje</button>
                </div>
              </div>
            </div>
          </form>
        </div><!--/.col-sm-6-->
        <div class="col-sm-6">
          <h1>Redes Sociales</h1>
          <div class="row">
            <div class="col-md-6">
              <ul class="social">
                <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="social">
                <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
              </ul>
            </div>
          </div>
        </div><!--/.col-sm-6-->
      </div><!--/.row-->
    </div><!--/.box-->
  </div><!--/.container-->
</section><!--/#contact-->

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
      </div>
      <div class="col-sm-6">
        <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
      </div>
    </div>
  </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>
