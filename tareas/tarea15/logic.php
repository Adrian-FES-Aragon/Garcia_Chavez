<?php

$opt0 = $_POST['evento_piedra'];
$opt1 = $_POST['evento_papel'];
$opt2 = $_POST['evento_tijeras'];

$x[0] = $_GET['evento_piedra']; 
$x[1] = $_GET['evento_papel'];
$x[2] = $_GET['evento_tijeras'];

$i = rand(0,2);

echo "i: $i";
echo "opt:  $opt";  
print_r(array_values($x));
/*
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
}*/

if ($i == $opt0) {
    echo "Gon ha elegido lo mismo! es un empate, considerate afortunado";
    header("index.php");
} 
?>
