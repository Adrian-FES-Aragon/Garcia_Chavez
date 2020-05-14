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
//retorna el numero de filas del resultado. Si encuentra más de uno lo usamos para imprimir el resultado en nuestra tabla
$count=mysqli_num_rows($resultado);

echo"
<table>
<tr>
    <th>Usuarios</th>
    <th>Carrera</th>
    <th>No. Cuenta Institucional</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Correo Electronico</th>
    <th>contraseña</th>
    <th>Fecha de registro</th>
    <th>Permisos</th>
</tr>
</table>";
if ($count>0) {
    //aqui se pintarian los registros de la BD 
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<table>";
        echo "<tr>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" .$row['carrer'].      "</td>";
        echo "<td>" .$row['code'].        "</td>";
        echo "<td>" .$row['address'].     "</td>";
        echo "<td>" .$row['number'].      "</td>";
        echo "<td>" .$row['email'].       "</td>";
        echo "<td>" .$row['password'].    "</td>";
        echo "<td>" .$row['registration_date']. "</td>";
        echo "</table>";        
    }
}else{
    echo"<h1> style='color:red' Sin ningun registro</h1>";
}
