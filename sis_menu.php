<div class="sidebar-nav">
<ul>
<?php if($_SESSION["tipo_usuario"]!=2){ ?>
<li><a href="principal.php" class="nav-header"><i class="fa fa-home"></i> Home</a></li>
<li><a href="#" data-target=".dashboard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-shopping-cart"></i> Ventas<i class="fa fa-collapse"></i></a></li>
<li>
  <ul class="dashboard-menu nav nav-list collapse">
    <li><a href="venta_nueva.php"><span class="fa fa-caret-right"></span> Crear venta</a></li>
    <li><a href="historico_ventas.php"><span class="fa fa-caret-right"></span> Hist&oacute;rico de Ventas</a></li>
  </ul>
</li>

<!--
<li data-popover="true" data-content="Acciones de las estaciones." rel="popover" data-placement="right"> 
-->
<li><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-shopping-basket"></i> Compras<i class="fa fa-collapse"></i></a></li>
<li>
  <ul class=" premium-menu nav nav-list collapse">
    <!--<li class="visible-xs visible-sm"><a href="#">- &uacute;ltimos datos -</a></span> solo visible en el celular-->
    <li><a href="compra_nueva.php"><span class="fa fa-caret-right"></span> Crear Compra</a></li>
    <li><a href="historico_compras.php"><span class="fa fa-caret-right"></span> Hist&oacute;rico de compras </a></li> 
  </ul>
</li>
<li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-edit"></i> Liquidaci&oacute;n de sueldos<i class="fa fa-collapse"></i></a></li>
<li>
  <ul class="legal-menu nav nav-list collapse">
    <li><a href="liquidar_empleados.php"><span class="fa fa-caret-right"></span> Liquidar</a></li>
    <li><a href="liquidaciones.php"><span class="fa fa-caret-right"></span> Mostrar Liquidaciones</a></li>  
    <li><a href="conceptos.php"><span class="fa fa-caret-right"></span> Conceptos</a></li>  
  </ul>
</li>      
<li><a href="#" data-target=".item2-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-users"></i> Empleados<i class="fa fa-collapse"></i></a></li>
<li>
  <ul class="item2-menu nav nav-list collapse">
    <li><a href="empleados.php"><span class="fa fa-caret-right"></span> Mostrar empleados</a></li>  
    <li><a href="categoriaempleado.php"><span class="fa fa-caret-right"></span> Categorias</a></li>  
  </ul>
</li>
<li><a href="#" data-target=".item-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-barcode"></i> Productos<i class="fa fa-collapse"></i></a></li>
<li>
  <ul class="item-menu nav nav-list collapse">
    <li><a href="productos.php"><span class="fa fa-caret-right"></span> Mostrar productos</a></li>  
    <li><a href="categoriaproducto.php"><span class="fa fa-caret-right"></span> Categorias</a></li>  
  </ul>
</li>

<li><a href="proveedores.php" class="nav-header"><i class="fa fa-book"></i> Proveedores</a></li>
<li><a href="clientes.php" class="nav-header"><i class="fa fa-male"></i> Clientes</a></li>
<li><a href="pago.php" class="nav-header"><i class="fa fa-money"></i> Cuenta Clientes</a></li>
<?php } else { ?>
<li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-shopping-cart"></i> Ventas<i class="fa fa-collapse"></i></a></li>
<li>
  <ul class="dashboard-menu nav nav-list collapse in">
    <li><a href="venta_nueva.php"><span class="fa fa-caret-right"></span> Crear Venta</a></li>
  </ul>
</li>
<?php } ?>
 </div> 

 