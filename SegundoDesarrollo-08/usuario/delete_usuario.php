<?php

include('../conexion/conexion.php');

$idusuario = $_GET['idusuario'];

$conn = conectar();


$sql = "DELETE FROM usuario WHERE idusuario='".$idusuario."'";

$resultado = mysqli_query($conn, $sql);

header('Location: ../principal/principal.html');
exit();

if (!$resultado) {
    echo '<div class="alert alert-danger" role="alert">Error al actualizar el autor</div>';
} else {
    echo "Malo";
}

// Cerramos la conexion a la base de datos

desconectar($conn);


?>