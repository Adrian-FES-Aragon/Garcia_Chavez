<?php
//se usa el require para requerir obligatoriamente el archivo conexion 
require("conexion.php");
//no es requisito obligatorio, independiente de los erroes
//include("conexion.php");

$conexion = new mysqli('127.0.0.1', 'root', '', 'test_php');

//generar el query
$consulta_sql = "SELECT * FROM PERSONA";

//mandar el query por medio de la conexion y almacenaremos en una variable
$resultado = $conexion->query($consulta_sql);
//retorna el numero de filas del resultado. Si encuentra más de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado);

echo "<table border='2'>
    <tr>
    <th>Usuario</th>
    <th>Carrera</th>
    <th>No. Cuenta Institucional</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Correo Electronico</th>
    <th>Contraseña</th>
    <th>Fecha de Registro</th>
    <th>Permisos</th>
    </tr>";


if ($count > 0) {
    //aqui se pintarian los registros de la BD 
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['carrera'] .        "</td>";
        echo "<td>" . $row['no_cuenta'] .      "</td>";
        echo "<td>" . $row['direcion'] .       "</td>";
        echo "<td>" . $row['telefono'] .       "</td>";
        echo "<td>" . $row['email'] .          "</td>";
        echo "<td>" . $row['password'] .       "</td>";
        echo "<td>" . $row['FechaRegistro'] .  "</td>";
        echo "<td>" . $row['Permisos'] .       "</td>";
        echo "</tr> </table>";
    }
} else {
    echo "<h1> style='color:red' Sin ningun registro</h1>";
}
