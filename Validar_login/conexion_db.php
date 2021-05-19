<?php
function conexion(){
$host = 'database-1.cqtykwibcfbc.us-east-1.rds.amazonaws.com';
$port = '5432';
$base_datos = 'valida_login';
$usuario = 'postgres';
$pass = 'postgres';
$conexion = pg_connect("host=$host port=$port dbname=$base_datos user=$usuario password=$pass")
            or die("Error de Conexion".pg_last_error());
			
return($conexion);
}
?>


