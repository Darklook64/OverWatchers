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
            <?php
            if (isset($_POST["btnBuscar"])) {
              require_once "../bd/Data.php";
              $d= new Data();
              $heroe=$_POST["txtBuscarHeroe"];

              $d->getNombreHeroe($heroe);

            }else {
              header("location: ../index.php?hackerMan=1");

            }

            ?>


          </div>
        </div>
      </div><!--/.item-->
    </div><!--/.carousel-inner-->
    <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
    <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
  </section><!--/#main-slider-->
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
