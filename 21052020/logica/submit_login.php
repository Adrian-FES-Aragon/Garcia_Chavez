<?php
require "conexion.php";
session_start();                    //acarrear variables de manera temporal en mi pagina
$no_cuenta = $_POST ['no_cuenta'];
$clave = $_POST ['contraseña'];

//la funcion count nos regresa el numero de filas de la consulta, el numero de registros que cumple la condicion
$q= "SELECT COUNT(*) AS contar FROM persona WHERE no_cuenta= '$no_cuenta' AND PASSWORD='$clave'";

$consulta= mysqli_query($conexion,$q);

$array= mysqli_fetch_array($consulta);

if ($array ['contar']>0) {
    $_SESSION['numeroCuenta']=$no_cuenta; //En la variable $_SESSION vamos a guardar el numero de cuenta temporalmente, hasta que mi usuario se salga de la app
    header ("location: ../principal.php"); //este archivo no esta en echo
}else  {
  echo"
  <div align='center'>
  <h1 >No estas registrado en nuestro sistema</h1>
  <a href='../index.php'>Login</a>
  </div>";  
}
