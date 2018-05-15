<?php
//Asignar variable de conexion
$conexion = mysqli_connect("localhost","root","","condesa");

//reanudar sesión
session_start();
$varsesion = $_SESSION['email'];

//validar Sesión
if($varsesion == null || $varsesion = ''){
    header("Location:login.html");
    die();
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
$chamarrra = $_POST["chamarra"];



//FK
$consulta = "SELECT id_usuario FROM login_clientes";
$fk_id_usuario = mysqli_query($conexion,$consulta);

/*Nomas pa ver jeje
echo $chamarrra;
$abc = (string) $fk_id_usuario;
echo $abc;*/

//Consulta
$insertar = "INSERT INTO pedidos(pantalon, camisa, traje_2p, traje_3p, saco_sport,
corbata, abrigo_ligero, vestido_calle, blusa_minima, camisa_seda, chamarra)
VALUES('$pantalon', '$camisa','$traje_2p','$traje_3p','$saco_sport','$corbata',
'$abrigo_ligero','$vestido_calle', '$blusa_minima', '$camisa_seda', '$chamarrra')";



/*Seleccionar el id del usuario que esta logeado
$email=$_SESSION=['email'];
echo $email;
die();
$fk_id_usuario =mysqli_query($conexion,"SELECT id_usuario FROM login_clientes WHERE email='$email");
$insertar_fk="INSERT INTO pedidos(fk_id_usuario) VALUE ($fk_id_usuario)";

//Ejecutar consulta de Foreign KEY
mysqli_query($conexion,$insertar_fk);*/



//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo'Error';
}else{
    echo 'OK';
}

 //cerrar conexion
 mysqli_close($conexion);

?>