<?php
 session_start();
 error_reporting(0);
 
 $varsesion = $_SESSION['usuario'];
  if ($varsesion == null ||  $varsesion = ''){
	 echo 'Usted no tiene autorizacion para usar esta herramienta' ;
	//  header("location:index.html");
     die();	 
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> SISTEMA DE GESTIÓN DE LÁMINA DE AGUA</h1></br></br>
    <h2> Bienvenido Usuario <?php echo $_SESSION['usuario']  ?>: </h2></br></br>
	<a href ="niveles_la.php"> Consulta de niveles de la lámina de agua</a></br></br>
	<a href ="datos_ambientales.php"> Consulta de datos ambientales</a></br></br>
	<a href ="tablero_compuertas.php"> Tablero de control del comportamiento de compuertas</a></br></br>
	<a href ="graficas_datos_ambientales.php"> Gráficas de series de tiempo de datos ambientales</a></br></br>
	<a href ="graficas_series_compuertas.php"> Gráficas de series de tiempo del comportamiento del sistema</a></br></br>
	<a href ="geoportal.php"> Geoportal de superficie de niveles</a></br></br>
	<a href ="cerrar_sesion.php"> cerrar sesión</a></br></br>

</body>
</html>