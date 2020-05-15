<?php


if (isset($_POST['evento_piedra'])) {
    $evento_piedra = $_POST['evento_piedra'];
    echo "TU ELEGISTE: " . $evento_piedra . '<br>' . "Y GON: ";

    $power = array("!PAPEL¡", $evento_piedra, "!TIJERAS¡");
    $rand = $power[array_rand($power)];
    echo $rand;

    if ($evento_piedra == $rand) {
        echo "" . '<br>' . "ES UN EMPATE!";
    }else if ($rand == "!TIJERAS¡" ) {
        echo "FELICIDADES LOGRASTE GANAR!";
    }else{
        echo "HAS FALLADO INTENTALO DE NUEVO";
    }

} else if (isset($_POST['evento_papel'])) {
    $evento_papel = $_POST['evento_papel'];
    echo "TU ELEGISTE: " . $evento_papel . '<br>' . "Y GON: ";

    $power = array("$evento_papel", "¡PIEDRA!", "¡TIJERAS!");
    $rand = $power[array_rand($power)];
    echo $rand;

    if ($evento_papel == $rand) {
        echo "" . '<br>' . "ES UN EMPATE!";
    }
}
if (isset($_POST['evento_tijeras'])) {
    $evento_tijeras = $_POST['evento_tijeras'];
    echo "TU ELEGISTE: " . $evento_tijeras . '<br>' . "Y GON: ";

    $power = array("!PAPEL¡", "!PIEDRA¡", $evento_tijeras);
    $rand = $power[array_rand($power)];
    echo $rand;

    if ($evento_tijeras == $rand) {
        echo "" . '<br>' . "ES UN EMPATE!";
    }
}





/*
if ($evento_piedra == $power) {

    # code...
}

$colores = array("rojo", "azul", "amarillo", "verde", "negro", "blanco");
echo "Valor aleatorio: " . $colores[array_rand($colores)];
*/


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