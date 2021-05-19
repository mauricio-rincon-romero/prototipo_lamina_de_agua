<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

 session_start();
 $_SESSION['usuario'] = $usuario;
 
 
 //  Conectarse a la base de datos

 include ("conexion_db.php");
 $dbcon = conexion();

 


$query = "SELECT * FROM login WHERE usuario='$usuario' and clave = '$clave'";

$resultado = pg_query($dbcon, $query);
 
$filas=pg_num_rows($resultado);
 
if($filas>0) {
    header("location:inicio_servicio.php");
}
else {
    echo "Error en la autenticación</br></br>";
	echo '<a href="index.html"> Regresar a inicio</a>';
}
pg_free_result($resultado);
pg_close($dbcon);
?>
</body>
</html>