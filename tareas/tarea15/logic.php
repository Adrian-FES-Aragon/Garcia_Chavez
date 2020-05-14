<?php

$rock = $_POST['evento_piedra'];
$paper = $_POST['evento_papel'];
$knife = $_POST['evento_tijeras'];

$opt[0] = $rock;
$opt[1] = $paper;
$opt[2] = $knife;
$i = rand(0, 2);
echo "i: " . $i;
echo "opt: " . $opt;

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
}
