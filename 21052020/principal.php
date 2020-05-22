<?php
    session_start();
    $AcarreoDeCuenta=$_SESSION['numeroCuenta'];

    if (!isset($AcarreoDeCuenta)) {
        header("location: index.php");
    }else {
        echo"<h1>Hola usuario Tu numero de cuenta es:$AcarreoDeCuenta</h1>";        
        echo"<a href='./logica/salir.php'>Salir</a>";  //href sirve para redireccionar a otra pagina
    }
