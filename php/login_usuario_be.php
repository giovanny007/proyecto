<?php

session_start();
include 'conexion_be.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena1= hash('sha512',$contrasena);

$validar_login = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
and contrasena='$contrasena1'");

if(mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $correo;
    header("location: ../tutorial-pokedex-master/index1.php");
    exit;
}else{
    echo '
        <script>
            alert("Usuario no exite, verifica los datos proporcionados")
            window.location= "../index.php";
        </script>
    ';
    exit;
}
?>
