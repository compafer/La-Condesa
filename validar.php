<?php

$email=$_POST['email'];
$password=$_POST['password'];
session_start();
//Conexion a base de datos
$conexion=mysqli_connect("localhost","root","","condesa");
//$nombre =" SELECT nombre, apellido FROM login_clientes WHERE email='$email'";

$_SESSION['email'] = $email;

$consulta="SELECT * FROM login_clientes WHERE email='$email' and password='$password'";
$consulta2="SELECT * FROM admin WHERE email ='$email' and password= '$password'";

if(mysqli_num_rows(mysqli_query($conexion,$consulta2))>0){
    header("Location:admin.php");
    mysqli_close($conexion);
    die();
}

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

//Si es correcto te manda a "pedido.php" y si no, escribe "Datos Invalidos"
if ($filas>0){
    header("location:pedido.php");
}
else{
    echo '<script>
         alert ("Datos Incorrectos");
         window.history.go(-1);
         </script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>