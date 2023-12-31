<?php
class fibonacci {
    private $num;
    private $serie;
    private $resultado;

    public function __construct( $numero ) {
        $this->num = $numero;
        $this->serie = array( 0, 1 );
        $this->resultado = 0;
        $this->calcular();
    }

    private function calcular() {
        for ( $i = 2; $i < $this->num; $i++ ) {
            $this->serie[ $i ] = $this->serie[ $i-1 ] + $this->serie[ $i-2 ];
        }
        $this->resultado = $this->serie[ $this->num-1 ];
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function imprimirSerie() {
        for ( $i = 0; $i < $this->num; $i++ ) {

            echo $this->serie[ $i ] . ' ';
        }
    }

}

class nivel_satisfaccion{
    private $numero;
    private $resultado;
    private $imagen;
    
    public function __construct($numero){
        $this->numero = $numero;
        $this->resultado = "";
        $this->imagen = "";
        $this->calcular();
    }
    
    private function calcular(){
        if ($this->numero >= 80) {
            $this->resultado = "Excelente";
            $this->imagen = "img/good.png";
        } elseif ($this->numero >= 50 && $this->numero <= 79) {
            $this->resultado = "Medio";
            $this->imagen = "img/medium.png";
        } elseif ($this->numero < 50 && $this->numero > 0) {
            $this->resultado = "Malo";
            $this->imagen = "img/bad.png";
        }
    }
    
    public function getResultado(){
        return $this->resultado;
    }

    //Imprimir la imagen

    public function imprimirImagen() {
        echo "<img src='$this->imagen' alt=''>";
    }

}

class manejo_de_matrices{
    private $numero;
    private $matriz;
    private $resultado;
    
    public function __construct($numero){
        $this->numero = $numero;
        $this->matriz = array();
        $this->resultado = "";
        $this->calcular();
    }
    
    private function calcular(){
        for ($i=0; $i < $this->numero; $i++) { 
            for ($j=0; $j < $this->numero; $j++) { 
                if ($i == $j) {
                    $this->matriz[$i][$j] = 1;
                } else {
                    $this->matriz[$i][$j] = 0;
                }
            }
        }
    }
    
    public function getResultado(){
        return $this->resultado;
    }

    //Imprimir la matriz en forma de tabla

    public function imprimirMatriz() {
        echo "<table border='1'>";
        for ($i=0; $i < $this->numero; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $this->numero; $j++) { 
                echo "<td>".$this->matriz[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>