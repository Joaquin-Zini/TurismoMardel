<?php

include("con_db.php");



if(isset($_POST['register']))
{
    if(strlen($_POST['name']) >= 1 && 
       strlen($_POST['apellido']) >= 1 &&
       strlen($_POST['email']) >= 1)


       {

        $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);

        $consulta = "INSERT INTO persona(nombre, apellido, email) VALUES ('$name','$apellido','$email')";
        $resultado = mysqli_query($conex, $consulta);

        if($resultado)
        {

            ?>

            <h3 class="ok">¡Te registraste correctamente!</h3>

            <?php
header("Location: pag/index.html");
die();
        }

        else
        {
            ?>

            <h3 class="bad">¡Ocurrió un error!</h3>

            <?php
        }


        }

        else
        {
            ?>
            <h3 class="bad">Por favor completá los campos</h3>
            <?php
        }



}


?>