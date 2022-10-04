<?php
//Configuracion de la base
function conn (){
$hostname = "localhost";
$usuariodb = "root";
$passwordb = "";
$dbname = "saler";

//Genera conexion
$conectar = mysqli_connect($hostname,$usuariodb,$passwordb,$dbname);
return $conectar;
}
?>
