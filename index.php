<!DOCTYPE html>
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
            <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
            <li><a href="#contact">Contactanos</a></li>
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
            <p class="lead">¡La página del futuro, Entra para enterarte todo sobr "OverWatch"!</p>
            <body>
              <form class="formularioLogin" action="controlador/validar.php" method="post">
                <input type="email"
                name="txtCorreo"
                placeholder="Ingrese su Email"
                required="required">

                <br>
                <input type="password"
                name="txtPass"
                placeholder="Escriba su password"
                required="required">
                <br>
                <input type="submit"
                name="btnEnviar"
                value="Login">



              </form>
              <?php
              if (isset($_GET["hackerMan"])) {
                $m= $_GET["hackerMan"];

                switch($m){
                  case 1:
                  echo "Ingreso Restringido";
                  break;
                  case 2:
                  echo "Ingreso Restringido";
                  break;
                  case 3:
                  echo "Clave o correo Incorrectos";
                  break;


                }
              }



              ?>

            </div>
          </div>
        </div><!--/.item-->
      </div><!--/.carousel-inner-->
      <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
      <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
    </section><!--/#main-slider-->
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
            &copy; 2016 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">OverWatchers</a>. Todos los derechos reservados.
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
