<?php 
$conexion = mysqli_connect("localhost","root","","condesa");


$sql = "SELECT * FROM pedidos WHERE estado = 1 ";
$result= mysqli_query($conexion,$sql);
$resultCheck= mysqli_num_rows($result);

if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {
            echo 'PEDIDO NUM.     ';echo $row['id_pedido'];echo '<br>';
        echo 'Usuario: ' ;echo $row['fk_id_usuario']; echo '<br>';
        if($row['pantalon']> 0){
        echo 'Pantalon: ';echo $row['pantalon'];echo'<br>';}
        if($row['camisa']> 0){
        echo 'Camisa: ';echo $row['camisa'];echo'<br>';}
        if($row['traje_2p']> 0){
        echo 'Traje2p: ';echo $row['traje_2p'];echo'<br>';}
        if($row['traje_3p']> 0){
        echo 'Traje3p: ';echo $row['traje_3p'];echo'<br>';}
        if($row['saco_sport']> 0){
        echo 'Saco Sport: ';echo $row['saco_sport'];echo'<br>';}
        if($row['corbata']> 0){
        echo 'Corbata: ';echo $row['corbata'];echo'<br>';}
        if($row['abrigo_ligero']> 0){
        echo 'Abrigo Ligero: ';echo $row['abrigo_ligero'];echo'<br>';}
        if($row['sueter']> 0){
        echo 'Suéter: ';echo $row['sueter'];echo'<br>';}
        if($row['vestido_calle']> 0){
        echo 'Vestido de Calle: ';echo $row['vestido_calle'];echo'<br>';}
        if($row['blusa_minima']> 0){
        echo 'Blusa Mínima: ';echo $row['blusa_minima'];echo'<br>';}
        if($row['camisa_seda']> 0){
        echo 'Camisa seda: ';echo $row['camisa_seda'];echo'<br>';}
        if($row['chamarra']> 0){
        echo 'Chamarra: ';echo $row['chamarra'];echo'<br>';}
        echo '<br>';
    }

}else{
    echo "No hay pedidos";
}

mysqli_free_result($result);
mysqli_close($conexion);


?>