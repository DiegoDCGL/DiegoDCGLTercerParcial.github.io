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

  <?php
  if (isset($errors)) {
    if (count($errors) > 0) {
  ?>

      <div class="row">
        <div class="col-lg-6- col-md-4">
          <div class="alert alert-danger alert-dismissible" role="alert">
            <?php
            foreach ($errors as $error)
              echo $error . '<br>';
            ?>

          </div>
        </div>
      </div>

  <?php
    }
  }
  ?>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3>
        Detalles sobre trabajo/ Datos
      </h3>
    </div><br>

    
    <?php

if (isset($respuesta)) {          ?>

<div class="col-md-12 justify-content-center d-flex">
    <div class="alert alert-success text-center my-4">
      <?php echo $respuesta ?>
    </div>
  <?php  } ?>

  </div>
  

    <div class="container layout_padding2-top">

      <div class="row">
        <div class="col-md-6 mx-auto">
          <form class="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>".  autocomplete="off" enctype="multipart/form-data">
            <div>
              <input type="text" placeholder="Nombre" required autofocus name="nombre">
            </div>
            <div>
              <input type="email" placeholder="Correo electrónico" required name="email">
            </div>
            <div>
              <input type="text" placeholder="Número de celular" required name="telefono">
            </div>
            <br>
            <div>
              <label for="">Sube un archivo PDF con las medidas (No mayor a 10MB)</label>
              <input type="file" name="archivo" accept="application/pdf" /> 
              <script type="text/javascript">
                $('input[type="file"]').on('change', function(){
                  var ext = $( this ).val().split('.').pop();
                  if ($( this ).val() != '') {
                    if(ext === "pdf"){
                      if($(this)[0].files[0].size > 10485760){
                        alert("El documento excede el tamaño máximo");
                        $('#modal-title').text('¡Precaución!');
                        $('#modal-msg').html("Se solicita un archivo no mayor a 10MB. Por favor verifica.");
                        $("#modal-gral").modal();           
                        $(this).val('');
                      }else{
                        $("#modal-gral").hide();
                      }
                    }
                    else
                    {
                      $( this ).val('');
                      alert("Solo se permiten archivos PDF");
                    }
                  }
                });
              </script>
    

            </div>
            <br>
            <div>
              <label for="">Eliga el trabajo a cotizar</label>
              <select name="servicio" id="">
                <option value="Torneado">Torneado</option>
                <option value="Fresado">Fresado</option>
                <option value="Rectificado">Rectificado</option>
              </select>
            </div>
            <div>
              <input type="text" name="asunto" class="message-box" placeholder="Mensaje/detalles" required>
            </div>
            <div class="d-flex justify-content-center ">
              <button type="submit" name="submit">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
  </section>

  <!-- end contact section -->
      
    <!-- footer section -->
      <?php include "footer.php" ?>
    <!-- footer section -->

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/fecha.js"></script>
    
</body>

</html>