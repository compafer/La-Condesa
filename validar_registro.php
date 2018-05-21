<?php
    if(isset($_POST['submit'])){

        $check=0;

        //Nombre vacio, nombre muy largo, nombre con numeros, Solo se permiten letras y espacios, no puros espacios
        if(empty($nombre)){
            echo "<p class='error'>* Por favor agrega un nombre </p>";$check = 1;
        }else{
            if(strlen($nombre)> 30){
                echo "<p class='error'>* Nombre muy largo </p>";$check = 1;
            }else{
                if(is_numeric($nombre)){
                    echo "<p class='error'>* No se permiten números en el nombre </p>";$check = 1;
                }else{
                    if(!preg_match("/^[a-zA-Z\s]+$/",$nombre)){
                        echo "<p class='error'>* Solo se permiten letras y espacios en nombre </p>";$check = 1;
                    }else{
                        if(ctype_space($nombre)){
                            echo "<p class='error'> *Ingresa un nombre (no solo espacios en blanco)</p>";$check = 1;
                       }
                    }
                }
            }
        }


        //APELLIDO
        if(empty($apellido)){
            echo "<p class='error'>* Por favor agrega un apellido </p>";$check=1;
        }else{
            if(strlen($apellido)> 30){
                echo "<p class='error'>* Apellido muy largo </p>";$check=1;
            }else{
                if(is_numeric($apellido)){
                    echo "<p class='error'>* No se permiten números en el apellido </p>";$check = 1;
                }else{
                    if(!preg_match("/^[a-zA-Z\s]+$/",$apellido)){
                        echo "<p class='error'>* Solo se permiten letras y espacios en apellido </p>";$check = 1;
                    }else{
                        if(ctype_space($apellido)){
                             echo "<p class='error'> *Ingresa un apellido (no solo espacios en blanco)</p>";$check = 1;
                        }
                    }
                }
            }
        }


        //EMAIL
        if(empty($email)){
            echo "<p class='error'>* Por favor agrega un correo electrónico </p>";$check=1;
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* Por favor agrega un correo electrónico correcto </p>";$check=1;
            }else{
                if(ctype_space($email)){
                    echo "<p class='error'> *Ingresa un correo electrónico (no solo espacios en blanco)</p>";$check = 1;
               }
            }
        }



        //TELEFONO
        if(empty($telefono)){
            echo "<p class='error'>* Por favor agrega un teléfono </p>";$check=1;
        }else{
            if(!is_numeric($telefono)){
                echo "<p class='error'>* El teléfono solo incluye campos numéricos </p>"; $check=1;
            }else{
                if(ctype_space($telefono)){
                    echo "<p class='error'> *Ingresa un telefono (no solo espacios en blanco)</p>";$check = 1;
               }
            }
        }


        //DIRECCION
        if(empty($direccion)){
            echo "<p class='error'>* Por favor agrega una dirección </p>";$check=1;
        }else{
            if(ctype_space($direccion)){
                echo "<p class='error'> *Ingresa una dirección (no solo espacios en blanco)</p>";$check = 1;
            }
            
        }


        //PASSWORD
        if(empty($password)){
            echo "<p class='error'>* Por favor agrega una contraseña </p>";$check=1;
        }else{
            if(strlen($password < 8)){
                echo "<p class='error'>* La contraseña debe contener al menos 8 caracteres </p>";$check=1;
            }else{
                if(ctype_space($password)){
                    echo "<p class='error'> *Ingresa una contraseña (no solo espacios en blanco)</p>";$check = 1;
               }else{
                    if(empty($confirmarpassword)){
                        echo "<p class='error'>* Por favor confirma tu contraseña </p>";$check=1;
                    }else{

                        if($password!=$confirmarpassword){
                            echo "<p class='error'>* Las contraseñas no coinciden </p>";$check=1;
                        }
                        
                    }
               }
            }
        }


        /*if(empty($confirmarpassword)){
            echo "<p class='error'>* Por favor confirma tu contraseña </p>";$check=1;
        }*/

        if($check !=1){
            include("registrar.php");
        }


    }