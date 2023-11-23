<html>
    <?php
$fact = $_POST['fact'];
$cont = 1;
for($i=$fact; $i>0; $i--){
    $cont= $cont*$i;
}
 echo"El factorial de ",$fact,", es: ", $cont;
 ?>
<form name="FormularioFactorial" method="post" action="lab42.php">
            <br/>
            Introduzca el Número que desee calcular su factorial <input type="int" name="fact" value="">
            <br/><br/>
            <input value="Calcular" type="submit">
        </form>
</html>