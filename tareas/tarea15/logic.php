<?php

if(isset($_POST['evento_piedra'])) {
    $evento_piedra=$_POST['evento_piedra'];
    echo "Tu nombre es: ".$evento_piedra;
}

if(isset($_POST['evento_papel'])) {
    $evento_papel=$_POST['evento_piedra'];
    echo "Tu nombre es: ".$evento_papel;
}

if(isset($_POST['evento_tijeras'])) {
    $evento_tijeras=$_POST['evento_tijeras'];
    echo "Tu nombre es: ".$evento_tijeras;
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