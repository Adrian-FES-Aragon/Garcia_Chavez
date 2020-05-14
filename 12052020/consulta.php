<?php
//se usa el require para requerir obligatoriamente el archivo conexion 
require("conexion.php");
//no es requisito obligatorio, independiente de los erroes
//include("conexion.php");

$conexion=new mysqli('localhost', 'root', '', 'fes_aragon');

//generar el query
$consulta_sql="SELECT * FROM ALUMNO";

//mandar el query por medio de la conexion y almacenaremos en una variable
$resultado=$conexion->query($consulta_sql);

$count=mysqli_num_rows($resultado);

?>