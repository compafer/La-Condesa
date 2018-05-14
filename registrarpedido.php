<?php
//Asignar variable de conexion
$conexion = mysqli_connect("localhost","root","","condesa");

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


//Consulta
$insertar = "INSERT INTO pedidos(pantalon, camisa, traje_2p, traje_3p, saco_sport,
corbata, abrigo_ligero, vestido_calle, blusa_minima, camisa_seda, chamarra)
VALUES('$pantalon', '$camisa','$traje_2p','$traje_3p','$saco_sport','$corbata',
'$abrigo_ligero','$vestido_calle', '$blusa_minima', '$camisa_seda', '$chamarrra')";



?>