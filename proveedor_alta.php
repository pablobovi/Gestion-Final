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
    <h1 class="page-title">Proveedores</h1>
  </div>
  <div class="main-content">
    <!-- Contenido principal -->
    <ul class="nav nav-tabs">
      <li><a href="proveedores.php">Listado de proveedores</a></li>
      <li class="active"><a href="#">Alta proveedor</a></li>
    </ul> 
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in">        
      <?php  include "inc_proveedores/inc_proveedor_alta.php" ?>         
      </div>      
    </div>     

    <?php include "inc_footer.php" ?>
  </div>
</div>
<?php include "sis_script_bootstrap.php" ?> 
  
</body></html>