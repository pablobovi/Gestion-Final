<?php require_once('Connections/conexion_smile.php'); ?>

<?php
     mysql_select_db($database_conexion_smile, $conexion_smile);
  
     /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
     htmlentities para evitar inyecciones SQL. */
     $myusuario = mysql_query("select * from usuario where nombreusuario =  '".htmlentities($_POST["usuario"])."'",$conexion_smile);
     $nmyusuario = mysql_num_rows($myusuario);

     //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario...
     if($nmyusuario != 0){
          $sql = "select * from usuario where nombreusuario = '".htmlentities($_POST["usuario"])."' 
               and password = '".htmlentities(MD5($_POST["pass"]))."'";
          $myclave = mysql_query($sql,$conexion_smile);
          $nmyclave = mysql_num_rows($myclave);

          //Si el usuario y clave ingresado son correctos, creamos la sesión del mismo.
          if($nmyclave != 0){
               session_start();
               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
               $_SESSION["autentica"] = "SIP";
               $_SESSION["idusuario"] = mysql_result($myclave,0,0);
               $_SESSION["usuarioactual"] = mysql_result($myclave,0,1); 
               $_SESSION["tipo_usuario"] = mysql_result($myclave,0,3);
               $_SESSION["idempleado"] = mysql_result($myclave,0,4);
               //nombre del usuario logueado.
               //Direccionamos a nuestra página principal del sistema.
               header ("Location: principal.php");

          }
          else{
               echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');
               window.location.href=\"index.php\"</script>"; 
          }
     }else{
          echo"<script>alert('El usuario no existe.');window.location.href=\"index.php\"</script>";
     }
     mysql_close($conexion_smile);
?>
