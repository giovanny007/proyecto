<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: ../tutorial-pokedex-master/index1.php"); 
        //header("location: pokemon.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singin-Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes cuenta?</h3>
                        <p>¡Inicia sesión aqui!</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿No tienes cuenta?</h3>
                        <p>¡Regístrate aqui!</p>
                        <button id="btn__registrarse">Regístrate</button>
                    </div>
                </div>

                <!--Formulario de Login y SingIn-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method= "POST" class="formulario__login">
                        <h2>Iniciar Sesión :)</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name= "contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--SingIn-->
                    <form action="php/registro_usuario_be.php" method= "POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre_completo" placeholder="Nombre completo">
                        <input type="text" name="correo" placeholder="Correo Electronico">
                        <input type="text" name= "usuario"placeholder="Usuario">
                        <input type="password" name="contrasena" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>
        <script src="assets/js/script.js"></script>
</body>
</html>