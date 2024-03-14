<?php 
    require 'sesion/config/config.php';
    require 'sesion/config/database.php';
    require 'sesion/clases/clienteFunciones.php';
    $db = new Database();
    $con = $db->conectar();
  
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
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
                  <a class="nav-link">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sections/about.php">Sobre Nosotros </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sections/services.php">Nuestros Servicios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sections/contact.php">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sections/location.php">Ubicación</a>
                </li>
              </ul>

              <?php if (isset($_SESSION['email'])) { ?>
                <div class="dropdown">
                  <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="btn_session" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i><?php echo $_SESSION['email']; ?>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="btn_session">
                    <li><a class="dropdown-item" href="sesion/logout.php">Cerrar Sesion</a></li>
                  </ul>
                </div>
              <?php } else { ?>
                <a href="sesion/login.php" class="btn btn-success"><i class="fa-solid fa-user"></i>Ingresar</a>
              <?php } ?>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <sec-tion class="slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="img-box">
                      <div>
                        <img src="images/diseño2.jpg" class="rounded">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Maquinados y
                          Automatizaciones
                        </h1>
                        <p>
                          Siempre con un servicio de calidad, destacando en eficiencia, y precisión.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="img-box">
                      <div>
                        <img src="images/Torneado.jpeg" class="rounded">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="detail-box">
                      <div>
                        <h1>
                          <span>
                            Calidad y <br>eficiencia
                          </span>
                        </h1>
                        <p>
                          <strong id="saludoMensaje"></strong><br>
                          Bienvenido a la página de maquinados y automatizaciones,<br> es un placer tenerte por aqui.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="img-box">
                      <div>
                        <img src="images/FresadoPres.jpg" class="rounded" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Personas de <br>
                          <span>
                            confianza
                          </span>
                        </h1>
                        <p>
                          Siempre laborando de la mejor manera atenta, detallada y correcta.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
    <!-- end slider section -->

  </div>
    
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Sobre nosotros
        </h3>
      </div>
      <p class="layout_padding2-top">
        Amplia experiencia y calidad en servicio, precios accesibles.
        Agradecemos su atención que nos brinda, para ponernos a sus órdenes y así ofrecerles nuestro mejor servicio, calidad y eficiencia en nuestros trabajos.
      </p>
      <div class="img-box layout_padding2">
        <img src="images/tornoCnc.jpg" class="rounded">
      </div>
      <p class="layout_padding2-bottom">
        Agradecemos su atención que nos brinda, para ponernos a sus órdenes y
        así ofrecerles nuestro mejor servicio, calidad y eficiencia en nuestros
        trabajos.
      </p>
    </div>
  </section>


  <!-- end about section -->

    <!-- service section -->

<section class="service_section layout_padding-bottom">

<div class="container">
  <div class="custom_heading-container">
    <h3>
      Nuestros servicios
    </h3>
  </div>
  <p>
    Contamos con los siguientes tipos de trabajos:
  </p>

  <div class="service_container">
    <div class="row">
      <div class="col-md-4">
        <div class="box b-1">
          <div class="img-box">
            <img src="images/diseño.jpg" class="rounded">
          </div>
          <div class="detail-box" class="text-center">
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
            <img src="images/Torneado.jpeg" class="rounded">
          </div>
          <div class="detail-box">
            <h6>
              Torneado
            </h6>
            <p>
              Se cuenta con servicio de torneado el cual,
              principalmente se realiza en torno manual
              o dependiendo de sus necesidades támbien se cuenta con torneado CNC(Control Numerico Computarizado).
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box b-1">
          <div class="img-box">
            <img src="images/planeado.jpg" class="rounded">
          </div>
          <div class="detail-box">
            <h6>
              Fresado
            </h6>
            <p>
              Se cuenta con servicio de fresado se realiza por diseño.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- end service section -->

  <!-- work section -->

  <section class="work_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Como Trabajamos
        </h3>
      </div>
    </div>
    <div class="work_container ">
      <div class="box b-1">
        <div class="img-box">
          <img src="images/atencion-al-cliente.png" alt="">
        </div>
        <div class="name">
          <h6>
            Buena atención con el cliente
          </h6>
        </div>
      </div>
      <div class="box b-2">
        <div class="img-box ">
          <img src="images/tiempo-rapido.png" alt="">
        </div>
        <div class="name">
          <h6>
            Buen tiempo de entrega
          </h6>
        </div>
      </div>
      <div class="box b-3">
        <div class="img-box ">
          <img src="images/archivo.png" alt="">
        </div>
        <div class="name">
          <h6>
            Trabajos con especificaciones detalladas
          </h6>
        </div>
      </div>
      <div class="box b-4">
        <div class="img-box ">
          <img src="images/unido.png" alt="">
        </div>
        <div class="name">
          <h6>
            Gran trabajo en equipo
          </h6>
        </div>
      </div>
    </div>
  </section>
  <!-- end work section -->
  <br>

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          <br>
          ¿Qué dicen nuestros clientes?
        </h3>
      </div>
      <div class="layout_padding2-top">
        <div class="client_container">
          <div class="detail-box">
            <p>
              Me encanta la manera en la que trabajan, cuentan con un
              muy buen precio, con buenos tiempos de entrega y
              excelente trato con el cliente.
            </p>
          </div>
          <div class="client_id">
            <div class="img-box">
              <img src="images/client.png" alt="">
            </div>
            <div class="name">
              <h5>
                Juan Gutierrez
              </h5>
              <h6>
                Cliente
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info-logo">
              <h2>
                Maquinados y automatizaciones
              </h2>
              <p>
                Empresa dedicada a entregar los mejores trabajos en el área industrial,
                desarrollando pequeños, medianos y grandes proyectos, todo dependiendo
                de las necesidades de los clientes.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="info-contact">
              <h4>
                Información de contacto
              </h4>
              <div class="location">
                <h6>
                  Visitanos!!
                </h6>
                <img src="images/location.png">
                <span>
                  Canadá #119, Col. Unidad Nacional II, Santa Catarina, N. L.
                </span>
                </a>
              </div>
              <div class="call">
                <h6>
                  Contactos:
                </h6>
                <span>
                  Ing. Gregório M. Cardona Mtz.C<br>
                </span>

                <span>
                  C.P. Araceli Sagastume R.<br>
                  <img src="images/telephone.png" alt=""> Cel: 8123-80-40-29<br>
                  <img src="images/correo-electronico.png"> Correo: maquinadosyautom.03@gmail.com
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="discover">
              <h4>
                Descubre
              </h4>
              <ul>
                <li>
                  <a>
                    Contáctanos
                  </a>
                </li>
              </ul>
              <div class="social-box">
                <a href="https://www.facebook.com/" target="_blank">
                  <img src="images/facebook.png">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Maquinados y automatizaciones <span id="year"> </span>&copy;
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/fecha.js"></script>
</body>

</html>