<?php

//Asignar variable de conexion
 $conexion = mysqli_connect("localhost","root","","condesa");

 //Asignar datos del HTML en variables
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $email = $_POST["email"];
 $telefono = $_POST["telefono"];
 $password = $_POST["password"];
// $password2 = $_POST["password2"];

 //Consulta
 $insertar = "INSERT INTO login_clientes(nombre, apellido, password, email, telefono) VALUES('$nombre', 
 '$apellido', '$password', '$email', '$telefono')";

 //Ejecutar consulta
 $resultado = mysqli_query($conexion, $insertar);

 if(!$resultado){
     echo'Error';
 }else{
     echo'OK jeje';
 }

 //cerrar conexion
 mysqli_close($conexion);



?>