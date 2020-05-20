<?php
$host_db="127.0.0.1";
$user_db="root";
$pass_db="";
$name_db="fes_aragon";
//conexion a la DB
$conexion= new mysqli($host_db, $user_db, $pass_db, $name_db);
mysqli_set_charset($conexion, 'utf8');
//validacion si el usuario ya esta registrado
$buscarUsuario="SELECT * FROM ALUMNO WHERE code = $_POST[cuenta]";
//mandar al query
$result=$conexion->query($buscarUsuario);
//saber si tenemos un resultado y se almacena en una variable
$count=mysqli_num_rows($result);
//se hace la validacion del resultado para saber si esta registrado 
if ($count == 1 ) { //se se encentra algun reegistro
    echo"<h1>'El usuario con el numero de cuenta:' ".$_POST['cuenta']. "'Ya esta registrado'</h1>";
}else{//se registra al usuario
    //query para mandar el registro
    mysqli_query($conexion, "INSERT INTO ALUMNO (
    user_name,
    career, 
    code,
    address,
    number,
    email,
    password)
    VALUES(
    '$_POST[nombre_usuario]',
    '$_POST[carrera]',
    '$_POST[cuenta]',
    '$_POST[nombre_completo]',
    '$_POST[numero_celular]',
    '$_POST[email]',
    '$_POST[password]')");
    echo"<h1> Usuario registrado exitosamente</h1>";
    echo"<h2>Bienvenido: ".$_POST['nombre_usuario']. "</h2>";
}
?>
