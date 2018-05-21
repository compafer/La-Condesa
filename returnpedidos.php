<?php 
$conexion = mysqli_connect("localhost","root","","condesa");

$sql = "SELECT * FROM pedidos WHERE estado = 1 ";
$result= mysqli_query($conexion,$sql);
$resultCheck= mysqli_num_rows($result);

/*$sql2= "SELECT * FROM login_clientes WHERE id_usuario=$row['fk_id_usuario']"
$result2 = mysqli_query($conexion,$sql2);
$fetch2 = mysqli_fetch_assoc($result2);

echo 'Usuario: ' ;echo $fetch2['id_usuario']; echo '<br>';
echo 'Nombre: ' ;echo $fetch2['nombre']; echo '<br>';
echo 'Apellido: ' ;echo $fetch2['apellido']; echo '<br>';
echo 'Dirección: ' ;echo $fetch2['direccion']; echo '<br>';*/



if($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        
        $user2=$row['fk_id_usuario'];
        $sql2= "SELECT * FROM login_clientes WHERE id_usuario = $user2";
        $result2 = mysqli_query($conexion,$sql2);
        $fetch2 = mysqli_fetch_assoc($result2);
        
        echo 'Usuario: ' ;echo $fetch2['id_usuario']; echo '<br>';
        echo 'Nombre: ' ;echo $fetch2['nombre']; echo '<br>';
        echo 'Apellido: ' ;echo $fetch2['apellido']; echo '<br>';
        echo 'Dirección: ' ;echo $fetch2['direccion']; echo '<br>';
        mysqli_free_result($result2);
    
        echo 'PEDIDO NUM.     ';echo $row['id_pedido'];echo '<br>';
    
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