<?php
$ventas = $_POST['ventas'];
if ($ventas >= 80){
    echo "<img src= 'Feliz.jpg' width = '200' heigth = '200'>";
} elseif ($ventas >= 50 && $ventas<80){
    echo "<img src= 'Serio.jpg' width = '200' heigth = '200'>";
} else{
    echo "<img src= 'Troste.jpg' width = '200' heigth = '200'>"; 
}

?>