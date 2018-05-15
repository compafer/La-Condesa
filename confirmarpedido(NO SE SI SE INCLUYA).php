<?php
//Validar Sesión
session_start();
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion = ''){
    header("Location:login.html");
    die();
}

if(isset($_POST['submit'])){
    
}

$pantalon = $_POST["pantalon"];
$camisa = $_POST["camisa"];
$traje_2p = $_POST["traje_2p"];
$traje_3p = $_POST["traje_3p"];
$saco_sport = $_POST["saco_sport"];
$corbata = $_POST["corbata"];
$abrigo_ligero = $_POST["abrigo_ligero"];
$vestido_calle = $_POST["vestido_calle"];
$blusa_minima = $_POST["blusa_minima"];
$camisa_seda = $_POST["camisa_seda"];
$chamarra = $_POST["chamarra"];
$total


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pedido</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

    
  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <img src="img/Logo.jpg" alt="Logo" width="300" height="145">
    </h1>

    <h2 class="sesion">
        <?php echo $_SESSION['email'] ?>
    </h2>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">La Condesa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index2.php">Inicio</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="pedido.php">Pedido
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="cerrar_sesion.php">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section p-5">
      <div class="container py-5 mx-auto" style="width: 750pxs">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h3 class="section-heading rounded-circle px-1">
                <span class="section-heading-lower mb-4">Pedido</span>
                <span class="section-heading-upper mb-3">Lista de Servicios</span>
              </h2>
              <form class="pedido" action="registrarpedido.php" method="POST">
                  
              
            
                <input type="submit" value="Confirmar Pedido"> 
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    

    <footer class="footer text-white text-center py-5">
        <div class="container">
          <p class="m-0 medium">Contacto</p>
          <p class="m-0 medium">Teléfono: (656) 297 4115</p>
          <a class="m-0 medium" href="https://www.facebook.com/lacondesajrz/" target="_blank"><font color="#f8b7b7">Facebook</a>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>