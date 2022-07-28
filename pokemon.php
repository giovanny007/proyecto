<?php
//Evitar que entren a la pagina sin iniciar session
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Inicia sesión para continuar");
            window.location = "index.php";
        </scripy>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <h1> ¡Bienvenido al mundo Pokemon! </h1>
    <a href="php/cerrar_sesion.php">Cerrar sesíon </a>
</body>
</html>