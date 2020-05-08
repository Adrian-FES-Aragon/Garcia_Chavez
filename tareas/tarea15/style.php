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
$u=rand(5,0);
?>

/* indico donde quiero que aparezca el color aleatorio */
body { 
    background-color: <?=$color[$i]?>;
}
.container{
    position: relative;
    width: 20%;
}
.container{
    position: relative;
    width: 40%;
}
.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.imagen{
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
.middle{
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
}
.btn{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 16px;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}
.btn:hover{
    background-color: black;
    color: white;
}