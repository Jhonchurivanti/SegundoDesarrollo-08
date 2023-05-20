<?php
include('../conexion/conexion.php');

// registrando la información del alumno
$idproducto = $_POST['idproducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];


// Conectando a la base de datos

$conexion = conectar();

// Agragando con la consulta los datos del alumno a la base de datos

$sql = "UPDATE producto SET nombre='".$nombre."', descripcion='".$descripcion."', stock='".$stock."', precio_venta='".$precio."' WHERE idproducto='".$idproducto."'";

// Ejecuntando la instruccion SQL
$resultado = mysqli_query($conexion, $sql);

header('Location: ../principal/productos.html');
// Cerrando la conexion

desconectar($conexion);

?>