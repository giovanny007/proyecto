<?php
include "conexion_be.php";

//Varibles para guardar en tabla
$nombre_completo= $_POST["nombre_completo"];
$correo= $_POST["correo"];
$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];

//Encripta contraseña
$contrasena= hash('sha512',$contrasena);
// comparar el hash con el texto plano, para la seguridad

$query="INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
        VALUES('$nombre_completo' , '$correo', '$usuario', '$contrasena')";

// Verificacion que no se repite el correo en la base de datos
$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo ='$correo' ");
// linea 23 revisar para que no te saque y te mande de vuelta
if(mysqli_num_rows($verificar_correo) > 0){
    echo'
    <script>
        alert("Correo registrado, intenta con uno diferente");
        window.location = "../index.php";
    </script>
    ';
    exit();
}

// Verificacion que no se repite el usuario en la base de datos
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario ='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
    <script>
        alert("Usuario registrado, intenta con uno diferente");
        window.location = "../index.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario registrado exitosamente, ¡Gracias!");
            window.location= "../index.php";
        </script>
    ';
    echo '
    <script>
        alert("Intentelo nuevamente, el usuario no se pudo registrar");
        window.location= "../index.php";
    </script>
    ';
}
?>