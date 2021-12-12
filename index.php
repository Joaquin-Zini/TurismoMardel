<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleform.css">
 

    <title>Ingresar</title>
</head>

<body>

    <form method="post">

        <h1>Ingresar</h1>
        <h3>Completa los siguientes datos para continuar</h3>

        <br><br>


        <h4>Nombre:</h4>
        <input type="text" name="name" placeholder="Ingresar nombre">
        <br><br>
        <h4>Apellido:</h4>
        <input type="text" name="apellido" placeholder="Ingresar apellido">

        <br><br>
        <h4>Correo electrónico:</h4>
        <input type="text" name="email" placeholder="Ingrese su correo electrónico">


        
        <br><br>
        
        <input type="submit" name="register">
        
     

    
    </form>

    <?php 

    include("registrar.php");
    
    ?>
    
</body>
</html>