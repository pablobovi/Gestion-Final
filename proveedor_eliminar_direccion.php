<?php require_once('Connections/conexion_smile.php'); ?>
<?php include('sis_acceso_ok.php'); ?>
<!doctype html>
<html lang="es">
<head>    
<?php include "sis_header.php" ?>
</head>
<body class=" theme-blue">
<?php include "sis_script.php" ?>
<?php include "sis_menu_usuario.php" ?>   
<?php include "sis_menu.php" ?>

<div class="content">
	<div class="header">
		<h1 class="page-title">Eliminacion direcci&oacute;n/proveedor</h1>
	</div>
	<div class="main-content">

	<div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">Direccion</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">    
        <?php  include "inc_proveedores/inc_proveedor_eliminar_direccion_ok.php" ?>               
        </div>
    </div>

	<?php include "inc_footer.php" ?>
	</div>
</div>
<?php include "sis_script_bootstrap.php" ?> 
</body>
</html>