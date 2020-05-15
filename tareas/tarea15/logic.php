<?php

$opt0 = $_POST['evento_piedra'];
$opt1 = $_POST['evento_papel'];
$opt2 = $_POST['evento_tijeras'];

echo "i: $i<br>";
echo "opt:" .$opt0. "<br>";
echo "opt:" .$opt1. "<br>";
echo "opt:" .$opt2 ."<br>";

if(isset($_POST['evento_piedra'])) {
    $roca=$_POST['evento_piedras: '];
    echo "Tu nombre es: ".$roca;
}


?>
















<!--
//print_r(array_values($x));

if ($i == $opt) {
    echo "Gon ha elegido lo mismo! es un empate, considerate afortunado";
    header("index.php");
} else if ($i == 0 && $opt == 2) {
    echo "Gon ha elegido ¡PIEDRA! tu pierdes";
    header("index.php");
} else if ($i == 1 && $opt == 0) {
    echo "Gon ha elegido ¡PAPEL! tu pierdes";
    header("index.php");
} else if ($i == 2 && $opt == 1) {
    echo "Gon ha elegido ¡TIJERAS! tu pierdes";
    header("index.php");
} else {
    echo "¡FELICIDADES HAS GANADO!";
}  --!>