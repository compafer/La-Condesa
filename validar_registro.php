<?php
    if(isset($_POST['submit'])){

        $check=0;
        if(empty($nombre)){
            echo "<p class='error'>* Por favor agrega un nombre </p>";$check = 1;
        }else{
            if(strlen($nombre)> 30){
                echo "<p class='error'>* Nombre muy largo </p>";$check = 1;
            }
        }

        if(empty($apellido)){
            echo "<p class='error'>* Por favor agrega un apellido </p>";$check=1;
        }else{
            if(strlen($nombre)> 30){
                echo "<p class='error'>* Apellido muy largo </p>";$check=1;
            }
        }

        if(empty($email)){
            echo "<p class='error'>* Por favor agrega un email </p>";$check=1;
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* Por favor agrega un email correcto </p>";$check=1;
            }
        }

        if(empty($telefono)){
            echo "<p class='error'>* Por favor agrega un teléfono </p>";$check=1;
        }else{
            if(!is_numeric($telefono)){
                echo "<p class='error'>* El teléfono solo incluye campos numéricos </p>"; $check=1;
            }
        }

        if(empty($direccion)){
            echo "<p class='error'>* Por favor agrega una dirección </p>";$check=1;
        }

        if(empty($password)){
            echo "<p class='error'>* Por favor agrega una contraseña </p>";$check=1;
        }


        if($check !=1){
            include("registrar.php");
        }


    }