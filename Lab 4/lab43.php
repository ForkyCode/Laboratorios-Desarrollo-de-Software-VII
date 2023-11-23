<html>
    <head>
        <title>Laboratorio 4.3</title></head>
    
    <body>
        <?php
            $min = 1;
            $max= 100;

            $i_max=0;
            $r_max=0;
            $a= array();
            echo "<b>Creacion del Arreglo:</b>";
            
            for($i=1; $i<=20;$i++){
                $a[$i]=rand($min,$max);
                if($r_max==$a[$i]){
                    $a[$i]=$r_max-1;
                }
                if($r_max<$a[$i]){
                    $r_max=$a[$i];
                    $i_max=$i;
                }
            
                echo "|".$a[$i]."|";
            }
            echo "<br><br> el numero mayor es: ".$r_max." <br/> en la posicion: ".$i_max;
        ?>    
    </body>

</html>