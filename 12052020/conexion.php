<?php  
$host_db="127.0.0.1";
$user_db="root";
$pass_db="";
$name_db="test_php";

$conexion= mysqli_connect($host_db, $user_db, $pass_db);
if ($conexion) {
    echo "<h1> MySql le esta dando permisos para ejecutar consultas</h1>";
}else{
    echo"<h1> MySql NO le esta dando permisos para ejecutar consultas posible error en pass y/o usuario</h>";
    
}
?>
