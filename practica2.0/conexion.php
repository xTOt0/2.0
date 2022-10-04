<?php
//Carga el archivo de conexion
include_once('conexiondb.php');
//Recibo datos
$dato=$_POST['Nombre'];
$dato1=$_POST['Email'];
$dato2=$_POST ['Telefono'];
$dato3=$_POST ['Subject'];
$dato4=$_POST ['Message'];
$dato5=$_POST ['date'];


//Consulta

$conectar=conn(); //ejecuta conexiones de la db
$sql="INSERT INTO contacto(Nombre,Email,Telefono,Subject,date, Message)
VALUES ('$dato','$dato1','$dato2','$dato3','$dato5','$dato4' )";
$resul = mysqli_query($conectar, $sql) or trigger_error('Querey failed',mysql_error($conectar),E_USER_ERROR);

echo "<script>location.href='index.html';</script>";
?>