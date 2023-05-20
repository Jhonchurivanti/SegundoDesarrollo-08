<?php

include('../conexion/conexion.php');
// Abrimos la conexión a la base de datos
$conn = conectar();
$idusuario = $_GET['idusuario'];

// Consulta a la base de datos
$sql = "SELECT * FROM usuario WHERE idusuario = '$idusuario'";

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
         while($usu = mysqli_fetch_array($result)) {
            $id_u = $usu['idusuario'];
            $nombre = $usu['nombre'];
            $ape_paterno = $usu['ape_paterno'];
            $ape_materno = $usu['ape_materno'];
            $direccion = $usu['direccion'];
            $email = $usu['email'];
            $telefono = $usu['telefono'];
            $constraseña = $usu['password_u'];
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
                            <h3 class="m-b-xs"><i class="pe pe-7s-graph1 text-warning m-r-xs"></i> Modificación de Usuario</h3>
                            <hr/>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-12 col-sm-12">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12"><h5 class="m-t-xs">Actualizar  Usuario</h5></div>
                            </div>
							<form name="formActualizar" action="actualizar_usuario.php" method="post">
                                <div class="form-group">
									<input type="hidden" class="form-control" name="idusuario" value="<?php echo $id_u?>">
								</div>
								<div class="form-group">
									<label>Nombre</label>
									<input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
								</div>
								<div class="form-group">
									<label>Apellido Paterno</label>
									<input type="text" class="form-control" name="ape_paterno" value="<?php echo $ape_paterno ?>">
								</div>
								<div class="form-group">
									<label>Apellido Materno</label>
									<input type="text" class="form-control" name="ape_materno" value="<?php echo $ape_materno ?>">
								</div>
                                <div class="form-group">
									<label>Dirección</label>
									<input type="text" class="form-control" name="direccion" value="<?php echo $direccion ?>">
								</div>
                                <div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" value="<?php echo $email ?>">
								</div>
                                <div class="form-group">
									<label>Teléfono</label>
									<input type="number" class="form-control" name="telefono" value="<?php echo $telefono ?>">
								</div>
                                <div class="form-group">
									<label>Contraseña</label>
									<input type="text" class="form-control" name="password_u" value="<?php echo $constraseña ?>">
								</div>
								<div  class="col-sm-12 text-right">
                                    <div class="panel-body buttons-margin">
									   <button type="submit" class="btn btn-w-md btn-success">Actualizar</button>
									   <a href="../principal/principal.html" class="btn btn-w-md btn-warning">Cancelar</a>
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