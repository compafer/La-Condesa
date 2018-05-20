
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

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
      <img src="img/Logo.jpg" alt="Logo" width="300" height="145" >
    </h1>

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
              <a class="nav-link text-uppercase text-expanded" href="index.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="login.html">Iniciar Sesión</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="registro.html">Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

      <h2>Registro</h2>
      <input type="text" placeholder="Nombre" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>">
      <input type="text" placeholder="Apellido" name="apellido"  value="<?php if(isset($apellido)) echo $apellido ?>">
      <input type="email" placeholder="Correo Electrónico" name="email"  value="<?php if(isset($email)) echo $email ?>">
      <input type="tel" placeholder="Número Telefónico (10 dígitos)" required pattern="[0-9]{10}" name="telefono"  value="<?php if(isset($telefono)) echo $telefono ?>">
      <input type="text" placeholder="Dirección" name="direccion"  value="<?php if(isset($direccion)) echo $direccion ?>">
      <input type="password" placeholder="Contraseña" name="password" >
      <input type="password" placeholder="Confirmar Contraseña" name="confirmarpassword">

      <input type="submit" value="Registrarse" name="submit">

      <?php
        if(isset($_POST['submit'])){
          $nombre = $_POST["nombre"];
          $apellido = $_POST["apellido"];
          $email = $_POST["email"];
          $direccion = $_POST['direccion'];
          $telefono = $_POST["telefono"];
          $password = $_POST["password"];
          //$password2 = $_POST["password2"];
          include("validar_registro.php");
        }
      ?>

      

    </form>

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
