<?php

include('../conexion/conexion.php');
// Abrimos la conexión a la base de datos
$conn = conectar();
$idproducto = $_GET['idproducto'];

// Consulta a la base de datos
$sql = "SELECT * FROM producto WHERE idproducto = '$idproducto'";

$result = mysqli_query($conn, $sql);
// Cerramos la conexión a la base de datos
desconectar($conn);
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/luna_admin-v1.1/metrics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2016 14:23:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>JWCA | Admin</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="../vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="../styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="../styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="../styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="../styles/style.css">
	
	<!-- sweetalert2 -->
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    <?php
         while($pro = mysqli_fetch_array($result)) {
            $id_pro = $pro['idproducto'];
            $nombre = $pro['nombre'];
            $descripcion = $pro['descripcion'];
            $stock = $pro['stock'];
            $precio = $pro['precio_venta'];
       }
    ?>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="index-2.html">
                    TECSUP
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="login.html">
                            <span class="profile-address">jhon.churivanti@tecsup.edu.pe</span>
                            <img src="../images/logo.webp" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row m-t-sm">
                <div class="col-md-15">
                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="m-b-xs"><i class="pe pe-7s-graph1 text-warning m-r-xs"></i> Modificación de Producto</h3>
                            <hr/>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-12 col-sm-12">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12"><h5 class="m-t-xs">Actualizar | Producto</h5></div>
                            </div>
							<form name="formActualizar" action="actualizar_producto.php" method="post">
                                <div class="form-group">
									<input type="hidden" class="form-control" name="idproducto" value="<?php echo $id_pro?>">
								</div>
								<div class="form-group">
									<label>Nombre</label>
									<input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
								</div>
								<div class="form-group">
									<label>Descripción</label>
									<input type="text" class="form-control" name="descripcion" value="<?php echo $descripcion ?>">
								</div>
								<div class="form-group">
									<label>Stock</label>
									<input type="text" class="form-control" name="stock" value="<?php echo $stock ?>">
								</div>
                                <div class="form-group">
									<label>Precio</label>
									<input type="text" class="form-control" name="precio" value="<?php echo $precio ?>">
								</div>
								<div  class="col-sm-12 text-right">
                                    <div class="panel-body buttons-margin">
									   <button type="submit" class="btn btn-w-md btn-success">Actualizar</button>
									   <a href="../principal/productos.html" class="btn btn-w-md btn-warning">Cancelar</a>
									</div>
                                </div>
							</form>
                        </div>
                    </div>
                </div>
    </section>
    <!-- End main content-->
</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="../vendor/pacejs/pace.min.js"></script>
<script src="../vendor/jquery/dist/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/flot/jquery.flot.min.js"></script>
<script src="../vendor/flot/jquery.flot.resize.min.js"></script>
<script src="../vendor/flot/jquery.flot.spline.js"></script>

<!-- App scripts -->
<script src="../scripts/luna.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
</body>
<!-- Mirrored from webapplayers.com/luna_admin-v1.1/metrics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2016 14:23:15 GMT -->
</html>