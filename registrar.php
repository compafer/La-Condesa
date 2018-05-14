<?php

//Asignar variable de conexion
 $conexion = mysqli_connect("localhost","root","","condesa");

 //Asignar datos del HTML en variables
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $email = $_POST["email"];
 $direccion = $_POST['direccion'];
 $telefono = $_POST["telefono"];
 $password = $_POST["password"];
// $password2 = $_POST["password2"];

 //Consulta
 $insertar = "INSERT INTO login_clientes(nombre, apellido, password, email, telefono, direccion) VALUES('$nombre', 
 '$apellido', '$password', '$email', '$telefono','$direccion')";

//Verificar si un usuario ya esta registrado con el mismo Correo Electrónico
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM login_clientes WHERE email = '$email'");
if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
         alert ("Usuario ya registrado");
         window.history.go(-1);
         </script>';
    exit;
}

 //Ejecutar consulta
 $resultado = mysqli_query($conexion, $insertar);

 if(!$resultado){
     echo'Error';
 }else{
     header("Location:login.html");
 }
 //cerrar conexion
 mysqli_close($conexion);



?>