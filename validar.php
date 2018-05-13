<?php
$email=$_POST['email'];
$password=$_POST['password'];

//Conexion a base de datos
$conexion=mysqli_connect("localhost","root","","condesa");

$consulta="SELECT * FROM login_clientes WHERE email='$email' and password='$password'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

//Si es correcto te manda a "pedido.html" y si no, escribe "Datos Invalidos"
if ($filas>0){
    header("location:pedido.html");
}
else{
    echo "Datos Invalidos";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>