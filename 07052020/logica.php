<?php

$dato1 = $_GET["num1"];
$dato2 = $_GET["num2"];
$dato3 = $_GET["num3"];

$resultado = $dato1+$dato2+$dato3;

echo"
<table class="table1">
    <tr>
         <td  ' > 
            <h1> El resultado es: ".$resultado." </h1>
        </td>
    </tr>
</table>";

?>
