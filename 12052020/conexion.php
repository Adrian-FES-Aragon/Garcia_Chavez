<?php  
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="fes_aragont";

$conexion= mysqli_connect($host_db, $user_db, $pass_db);
if ($conexion) {
    echo "<h1> MySql le esta dando permisos para ejecutar consultas</h1>";
}else{
    echo"<h1> no le esta dando permisos para ejecutar consultas posible error en pass y/o usuario</h>";
    
}
?>
