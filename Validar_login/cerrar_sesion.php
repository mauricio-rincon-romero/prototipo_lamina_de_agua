<?php
 session_start();
 session_destroy();
     header("location:index.html");

 
  $varsesion = $_SESSION['usuario'];
  if ($varsesion == null ||  $varsesion = ''){
	 echo 'Usted no tiene autorizacion para usar esta herramienta' ;
     die();	 
 }
?>