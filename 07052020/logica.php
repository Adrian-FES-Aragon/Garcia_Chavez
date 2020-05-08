<?php header("Content-type: text/css"); 

$dato1 = $_GET["num1"];
$dato2 = $_GET["num2"];
$dato3 = $_GET["num3"];

$resultado = $dato1+$dato2+$dato3;

echo"
<head>
<link rel="stylesheet" type="text/css" href="estilos.php">
</head>
<body>
<table align='center'>
    <tr>
         <td style='border: 2px solid black; background-color:red; ' > 
            <h1> El resultado es: ".$resultado." </h1>
        </td>
    </tr>
</table>
</body>;"
?>
