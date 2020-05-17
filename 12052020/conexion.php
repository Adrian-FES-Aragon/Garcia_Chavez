<?php  
$host_db="127.0.0.1";
$user_db="root";
$pass_db="";
$name_db="fes_aragon";

$conexion= mysqli_connect($host_db, $user_db, $pass_db);
if ($conexion) {
    echo "<h1>REGISTROS</h1>";
}else{
    echo"<h1> Error en usuario o contraseña.</h>";
    
}
?>
