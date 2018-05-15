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

//Asignar datos HTML a variables
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


//FK
$email= $_SESSION['email'];
$sql = "SELECT * FROM login_clientes WHERE email = '$email'";
$result= mysqli_query($conexion,$sql);
$fk = mysqli_fetch_assoc($result);
$fk_id_usuario = $fk['id_usuario'];


/*//Muestra todos los id_usuario
if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id_usuario'];
    }
}*/


//Consulta
$insertar = "INSERT INTO pedidos (pantalon, camisa, traje_2p, traje_3p, saco_sport,
corbata, abrigo_ligero, vestido_calle, blusa_minima, camisa_seda, chamarra, fk_id_usuario )
VALUES('$pantalon','$camisa','$traje_2p','$traje_3p','$saco_sport','$corbata',
'$abrigo_ligero','$vestido_calle', '$blusa_minima', '$camisa_seda', '$chamarra','$fk_id_usuario')";



//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo'Error';
}else{
    echo '<script> alert ("Pedido Realizado") </script>';
}

sleep(5);
header("Location: index2.php");



mysqli_close($conexion);

?>