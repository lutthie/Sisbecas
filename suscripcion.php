<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Suscripción</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
</head>

<body>

  <div class="click-closed"></div>
    <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">SISBECAS<span class="color-b">GT</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Becas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="oportunidades-becas.php">Oportunidades</a>
            </div>
          </li>
            <li class="nav-item">
                <a class="nav-link active" href="suscripcion.php">Suscripción</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Suscribete a nuestro sistema</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Suscripción
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Body Star /-->
    <section class="property-grid grid">
        
             <img src="img/registro.jpg">
 <?php
        include ("prueba.php");
        $con=conectar(); 
        ?>
        <div class="form-wrapper">
           
            <form method="POST" action="suscripcionSQL.php" id="cpass">                   
                
                <div class="inputBox">
                    <input id="nombre" type="text" autocomplete="off" name="nombre" placeholder="Nombre">
                    <span>Solo se permiten letras y espacios</span>
                </div>        
                
                <div class="inputBox">
                    <input id="apellido" type="text" autocomplete="off" name="apellido" placeholder="Apellido">
                    <span>Solo se permiten letras y espacios</span>
                </div>
            
                <div class="inputBox">
                    <input id= "edad" type="number" autocomplete="off" name="edad" placeholder="Edad">
                    <span>Usted debe ser mayor de edad</span>
                </div>
                
                <div class="inputBox">
                    <input id="id_user" type="text" autocomplete="off" name="id_user" placeholder="DPI">
                    <span>Ingrese DPI</span>
                </div>
                
                <div class="inputBox">
                    <input id="email" type="email" autocomplete="off" name="email" placeholder="Correo electrónico">
                    <span>Su correo es inválido</span>
                </div>
            
                <div class="inputBox">
                    <input id="contrasena" type="password" autocomplete="off" name="contrasena" placeholder="Contraseña">
                    <span>Su contraseña es muy corta</span>
                </div>
            
                    <div class="inputBox">
                        <input id="cpassword" type="password" autocomplete="off" name="cpassword" placeholder="Confirmar Contraseña">
                        <span>Las contraseñas no coiciden</span>
                    </div>
                    <section id="sec1">
			<div class="container">
				<button class="btn-5 btn-5a"><a href="#">Registrate</a></button>
			</div>
                        <div class="iniciar">
                            <span><a href="login.php">Ya tienes una cuenta?</a></span>
                        </div>
		</section>
                  </form>
      </div>
        
  </section>
  <!--/ Property Grid End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
    
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="oportunidades-becas.php">Becas</a>
              </li>
              <li class="list-inline-item">
                <a href="suscripcion.php">Suscripción</a>
              </li>
              <li class="list-inline-item">
                <a href="contact.php">Contacto</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/SegeplanGT/?epa=SEARCH_BOX">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/Segeplan">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/secretariadeplanificacion/?hl=es-la">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
