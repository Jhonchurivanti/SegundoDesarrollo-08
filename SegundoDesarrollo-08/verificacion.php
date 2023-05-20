<?php
require('./conexion/conexion.php');

$email = $_POST['email'];
$pass = $_POST['password_u'];

$conn = conectar();

$sql = $conn->query("SELECT * FROM usuario WHERE email = '$email' AND password_u = '$pass'");

        if ($datos = $sql->fetch_object()) {
            header('Location: ./principal/principal.html');
        } else {
            echo '<div>"DATOS INCORRECTOS"</div>';
            echo '<a href="index.html">Volver</a>';
        }

desconectar($conn);
?>