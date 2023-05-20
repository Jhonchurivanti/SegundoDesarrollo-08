<?php
include('../conexion/conexion.php');

// registrando la información del alumno
$idusuario = $_POST['idusuario'];
$nombre = $_POST['nombre'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$pass = $_POST['password_u'];


// Conectando a la base de datos

$conexion = conectar();

// Agragando con la consulta los datos del alumno a la base de datos

$sql = "UPDATE usuario SET nombre='".$nombre."', ape_paterno='".$ape_paterno."', ape_materno='".$ape_materno."', direccion='".$direccion."', email='".$email."', telefono='".$telefono."', password_u='".$pass."' WHERE idusuario='".$idusuario."'";

// Ejecuntando la instruccion SQL
$resultado = mysqli_query($conexion, $sql);

header('Location: ../principal/principal.html');
exit();

if (!$resultado) {
    echo '<div class="alert alert-danger" role="alert">Error al actualizar el autor</div>';
} else {
    echo "Malo";
}

// Cerrando la conexion

desconectar($conexion);

?>