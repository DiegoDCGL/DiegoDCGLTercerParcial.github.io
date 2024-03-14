<?php 
    require '../sesion/config/config.php';
    require '../sesion/config/database.php';
    require '../sesion/clases/clienteFunciones.php';
    $db = new Database();
    $con = $db->conectar();
    verificarSesion();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Maquinados y automatizaciones</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              Maquinados <br>
              y automatizaciones
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">Sobre Nosotros </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.php">Nuestros Servicios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="location.php">Ubicación</a>
                </li>
              </ul>

              <?php if (isset($_SESSION['email'])) { ?>
                <div class="dropdown">
                  <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="btn_session" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i><?php echo $_SESSION['email']; ?>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="btn_session">
                    <li><a class="dropdown-item" href="../sesion/logout.php">Cerrar Sesion</a></li>
                  </ul>
                </div>
              <?php } else { ?>
                <a href="../sesion/login.php" class="btn btn-success"><i class="fas fa-user"></i>Ingresar</a>
              <?php } ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  
  <!-- service section -->
  <section class="service_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3>
            Nuestros servicios
          </h3>
        </div>
        <p>
          En Maquinados y Automatizaciones le Trabajamos a empresas como:<br>
          <br><strong>Plásticos y Alambres, S. A. de C. V.</strong><br>
          Se le da un servicio especializado en la fabricación de piezas para sus
          troqueles progresivos tales como: <br>
          <strong>swajes, stripper, cuchillas, entre otros.</strong>
          Apoyamos al departamento de calidad, fabricando gages y mantenimiento a
          los mismos.
          <br><br>
          <strong>Sic Marking, S.A. de C.V.</strong><br>
          Se le da servicio especializado de maquinado en la fabricación de fixture
          para sus máquinas marcadoras. <strong> Laser, Persecución y Rayado.</strong>
          Estaremos en contacto para cualquier otra información que nos soliciten y
          nos den la oportunidad de trabajar con ustedes.
        </p>
        <div class="service_container">
          <div class="row">
            <div class="col-md-4">
              <div class="box b-1">
                <div class="img-box">
                  <img src="../images/pruebas.jpg" class="rounded">
                </div>
                <div class="detail-box">
                  <h6>
                    Diseño
                  </h6>
                  <p>
                    Contamos con el servicio de diseño, en el cual se nos proporcionan
                    las medidad y se procede a realizar el diseño que se desee.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box b-1">
                <div class="img-box">
                  <img src="../images/Torneado.jpeg" class="rounded">
                </div>
                <div class="detail-box">
                  <h6>
                    Torneado
                  </h6>
                  <p>
                    Se cuenta con servicio de torneado el cual, principalmente se realiza en torno manual
                    o dependiendo de sus necesidades tambien se cuenta con torneado CNC (Control Numerico Computarizado)
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box b-1">
                <div class="img-box">
                  <img src="../images/planeado.jpg" class="rounded">
                </div>
                <div class="detail-box">
                  <h6>
                    Fresado
                  </h6>
                  <p>
                  El fresado es un proceso en el que una herramienta de fresado 
                  corta el material con un movimiento giratorio.
                  Al igual que ocurre con el taladrado, esto es 
                  posible gracias a una amplia gama de herramientas diferentes
                  con diferentes diámetros y diferentes durezas.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

  <!-- end service section -->

  <div class="custom_heading-container">
    <h3>
      Nuestros trabajos realizados
    </h3>
  </div>
  <!-- Inicio del carrusel -->

  <section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <!-- Primer elemento del carrusel -->
        <div class="carousel-item active">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="img-box">
                    <div>
                      <img src="../images/engranemodi.jpg" class="rounded"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Engrane<br>
                      </h1>
                      <p>
                        Un engranaje es un mecanismo utilizado
                        para transmitir y transformar el movimiento
                        rotacional. Es utilizado para realizar
                        un cambio en la velocidad o para variar
                        el par de salida de un dispositivo que se
                        encuentra girando.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Segundo elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="img-box">
                    <div>
                      <img src="../images/vistaalzada.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                      Vista alzada
                        <br>
                      </h1>
                      <p>
                      Alzado: es la vista que mejor define la pieza, 
                      y a partir de ella se obtienen las distintas vistas.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tercer elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="img-box">
                    <div>
                      <img src="../images/disco.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                      Disco<br>
                      </h1>
                      <p>
                      Elemento de fricción situado entre dos platos metálicos,
                      que se utiliza para acoplar progresivamente el movimiento
                      del motor a la caja de cambios.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Cuarto elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="img-box">
                    <div>
                      <img src="../images/vista_arriba.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Guias (Vista planta)<br>
                      </h1>
                      <p>
                      Se muestra la pieza desde una vista de planta,
                      la cual sigue siendo unas guias que van colocadas dentro de
                      otra pieza más grande. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quinto elemento del carrusel -->

        <!-- Sexto elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-5">
                  <div class="img-box">
                    <div>
                      <img src="../images/guias.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Guias
                      </h1>
                      <p>
                      Las guías de caída de piezas IPS rectas o cónicas 
                      dirigen las piezas a la zona de recogida de la 
                      máquina de inyección de plásticos. Evitan la 
                      pérdida incontrolada de las piezas expulsadas. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin del carrusel -->
      </div>

    </div>
    <div class="container">
      <div class="slider_nav-box">
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

    <!-- footer section -->
      <?php include "footer.php" ?>
    <!-- footer section -->

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/fecha.js"></script>
</body>

</html>