<?php
  $conexion = mysqli_connect("localhost","root","","condesa");
    session_start();
    $varsesion = $_SESSION['email'];

    if($varsesion == null || $varsesion == ''){
        header("Location:login.html");
        die();
    }

  $sql_id = "SELECT id_usuario FROM login_clientes WHERE email = '$varsesion'"; //Consulta que busca el id del usuario logueado
  $result_id = mysqli_query($conexion,$sql_id); //Ejecutar y almacenar consulta
  $fetch_id = mysqli_fetch_assoc($result_id);
  $id=$fetch_id['id_usuario'];

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

              <?php
                  $sql_pedido = "SELECT fk_id_usuario FROM pedidos WHERE fk_id_usuario = '$id' ";  
                  $result_pedido= mysqli_query($conexion,$sql_pedido); //Ejecutar y almacenar consulta
                  $resultcantidad_pedido= mysqli_num_rows($result_pedido); //Retorna Numero de filas que tienen los datos de la consulta
                
                
                  if($resultcantidad_pedido > 0){ //si hay mas de 0 pedidos?

                    $sql_estado= "SELECT * FROM pedidos WHERE fk_id_usuario = '$id'";
                    $result_estado=mysqli_query($conexion,$sql_estado);
                    
                    while($fetch_estado=mysqli_fetch_assoc($result_estado)){ //Checar si alguno de todos los estados es diferente de 1(Realizado)
                        if($fetch_estado['estado'] == 1){ //El estado es 1(REALIZADO)?
                            if($fetch_estado['pantalon']> 0){
                            echo 'Pantalon: ';echo $fetch_estado['pantalon'];echo'<br>';}
                            if($fetch_estado['camisa']> 0){
                            echo 'Camisa: ';echo $fetch_estado['camisa'];echo'<br>';}
                            if($fetch_estado['traje_2p']> 0){
                            echo 'Traje2p: ';echo $fetch_estado['traje_2p'];echo'<br>';}
                            if($fetch_estado['traje_3p']> 0){
                            echo 'Traje3p: ';echo $fetch_estado['traje_3p'];echo'<br>';}
                            if($fetch_estado['saco_sport']> 0){
                            echo 'Saco Sport: ';echo $fetch_estado['saco_sport'];echo'<br>';}
                            if($fetch_estado['corbata']> 0){
                            echo 'Corbata: ';echo $fetch_estado['corbata'];echo'<br>';}
                            if($fetch_estado['abrigo_ligero']> 0){
                            echo 'Abrigo Ligero: ';echo $fetch_estado['abrigo_ligero'];echo'<br>';}
                            if($fetch_estado['sueter']> 0){
                            echo 'Suéter: ';echo $fetch_estado['sueter'];echo'<br>';}
                            if($fetch_estado['vestido_calle']> 0){
                            echo 'Vestido de Calle: ';echo $fetch_estado['vestido_calle'];echo'<br>';}
                            if($fetch_estado['blusa_minima']> 0){
                            echo 'Blusa Mínima: ';echo $fetch_estado['blusa_minima'];echo'<br>';}
                            if($fetch_estado['camisa_seda']> 0){
                            echo 'Camisa seda: ';echo $fetch_estado['camisa_seda'];echo'<br>';}
                            if($fetch_estado['chamarra']> 0){
                            echo 'Chamarra: ';echo $fetch_estado['chamarra'];echo'<br>';}
                            
                        }
                    }
                  }
                    mysqli_close($conexion);  
              ?>
              
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