<?php header("Content-type: text/css");

//Creo un array con varios colores
$color[0]='#FF5733';
$color[1]='#33E0FF';
$color[2]='#8D33FF';
$color[3]='#FFCA33';
$color[4]='#90FF33';
$color[5]='#335BFF';

// Elijo un color aleatorio
$i=rand(0,5);
?>

/* indico donde quiero que aparezca el color aleatorio */
body { 
    background-color: <?=$color[$i]?>;
}

h1 {
    color: black;
    font-size: 2em;
    font-weight: lighter;
}
div{ 

    background-color: <?=$color[$i]?>;
    border: 5px solid white;
    height: auto;
    text-align: center;
}