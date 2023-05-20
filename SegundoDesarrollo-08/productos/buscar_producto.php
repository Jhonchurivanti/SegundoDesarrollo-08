<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$buscador = $_POST['buscador'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "SELECT idproducto, nombre, descripcion, stock, precio_venta FROM producto WHERE nombre LIKE '$buscador' '%'";

$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	
	  $buscad = $buscad .'<tr>'.
	                         '<td>'.$crow['nombre'].'</td>'.
                             '<td>'.$crow['descripción'].'</td>'.
                             '<td>'.$crow['stock'].'</td>'.
                             '<td>'.$crow['precio_venta'].'</td>'.
                             '<td>'.
								'<a href="../productos/delete_producto.php?idproducto='.$crow['idproducto'].'" class="pe pe-7s-trash text-accent"></a>&nbsp;&nbsp;'.
							    '<a href="../productos/editar_producto.php?idproducto='.$crow['idproducto'].'" class="pe pe-7s-pen text-accent"></a>'.
							 '</td>'.
						   '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conexion);

echo $buscad;

?>