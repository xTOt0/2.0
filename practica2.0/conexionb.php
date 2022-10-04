<?php
//Carga el archivo de conexion
include_once('conexiondb.php');
//Recibo datos
$dato=$_POST['nombres'];
$dato2=$_POST ['apellidos'];
$dato3=$_POST ['correo'];
$dato4=$_POST ['numero'];
//Consulta
$conectar=conn(); //ejecuta conexiones de la db
$sql="INSERT INTO contacto(nombres,apellidos,correo,numero)
VALUES ('$dato','$dato2','$dato3','$dato4' )";
$resul = mysqli_query($conectar, $sql) or trigger_error('Querey failed',mysql_error($conectar),E_USER_ERROR);

echo "<script>location.href='index.html';</script>";