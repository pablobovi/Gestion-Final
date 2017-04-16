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
      <h1 class="page-title">Proveedores - Editar Direccion</h1>
      <!-- Navegador -->
      <ul class="breadcrumb">
          <li><a href="proveedor_edicion.php?idproveedor=<?php echo $_GET['idproveedor']; ?>">Proveedor<?php echo " ".$_GET['idproveedor']; ?></a> </li>
          <li class="active">Edici&oacute;n Proveedor</li>
      </ul>

    </div>
    <div class="main-content">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading no-collapse">Direcciones</div> 
                <?php include "inc_proveedores/inc_proveedor_direccion_modificar.php" ?>                     
        </div>
        </div>
    </div>

    <?php include "inc_footer.php" ?>
    </div>
  </div>
  <?php include "sis_script_bootstrap.php" ?> 
  
</body>
</html>