<?php
$host_db="localhost";
$user_db="root";
$password_db="";
$name_db="test_php";

$conexion=mysqli_connect($host_db,$user_db,$password_db,$name_db);
if ($conexion) {
    
}else{
    echo "<p>error en la conexion</p>";
}
