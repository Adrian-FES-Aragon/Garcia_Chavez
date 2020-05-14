<?php

$choice[0] = $_POST["evento_piedra"];
$choice[1] = $_POST["evento_papel"];
$choice[2] = $_POST["evento_tijeras"];

$i = rand(0, 2);

if ($i == 0) {
    echo "Gon ha elegido ¡PAPEL! tu pierdes";
    header("index.php");  # code...
} else if ($i== 1) {
    echo "Gon ha elegido ¡TIJERAS! tu pierdes";
    header("index.php");
} else if ($i == 2) {
    echo "Gon ha elegido ¡PIEDRA! tu pierdes";
    header("index.php");
}
