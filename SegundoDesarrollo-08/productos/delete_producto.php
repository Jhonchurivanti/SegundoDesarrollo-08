<?php

include('../conexion/conexion.php');

$idproducto = $_GET['idproducto'];

$conn = conectar();


$sql = "DELETE FROM producto WHERE idproducto='".$idproducto."'";

$resultado = mysqli_query($conn, $sql);

header('Location: ../principal/productos.html');
// Cerramos la conexion a la base de datos

desconectar($conn);


?>