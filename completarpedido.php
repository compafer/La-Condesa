<?php

$conexion = mysqli_connect("localhost","root","","condesa");
session_start();
$varsesion = $_SESSION['email'];

if($varsesion == null || $varsesion == '' || $varsesion != 'admin@admin.com'){
    header("Location:login.html");
    die();
}

$idpedido=$_POST['idpedido'];

$sql_ped = "UPDATE pedidos SET estado= 2 WHERE id_pedido= $idpedido ";
$result_ped = mysqli_query($conexion,$sql_ped);
header("location: admin.php");

//$sql_ped = "UPDATE pedidos SET estado= 2 WHERE id_pedido= $idpedido ";
/*
$sql_ped = "SELECT id_pedido FROM pedidos WHERE pedido=$idpedido";
$result_ped = mysqli_query($conexion,$sql_ped);
$resultCheck_ped= mysqli_num_rows($result_ped);

if($resultCheck_ped > 0 ){
    echo '<script>
         alert ("Pedido Completado");
         window.history.go(-1);
         </script>';
        $sql_cons =  mysqli_query($conexion,"UPDATE pedidos SET estado= 2 WHERE id_pedido= $idpedido");

}else{
        echo '<script>
         alert ("Pedido NO Encontrado");
         window.history.go(-1);
         </script>';
    
}*/



//mysqli_free_result($result_ped);
mysqli_close($conexion);

?>