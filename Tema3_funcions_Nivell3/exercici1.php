<?php 
// - Exercici 1
// La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
// Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret.


// 1. Crear array con todos los números
// 2. El primero es primo. Dividir todos los demás por este, y los múltiplos eliminarlos
// 3. Realizar la misma acción con el siguiente número primo
// 4. Parar cuando el siguiente primo elevado a 2 sea mayor que el tope que hemos marcado en el rango 
?>

    <hr />
    <h2>Escribe un texto</h2>

    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>

<?php
    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        $tope=$_POST['valor1'];
        $arrRango=crearArrayRango($tope);

        
        for ($x=0;pow($arrRango[$x],2) < $tope;$x++) {
            $arrRango=determinarPrimos($arrRango, $x);
        }    
        
        mostrarNumerosPrimos($arrRango, $tope);
    }

    function crearArrayRango($tope){
        $arrRango=[];
        for ($i=2;$i<=$tope;$i++) {
            $arrRango[$i-2]=$i;
        }
        return $arrRango;
    }    

    function determinarPrimos($arrRango,$x){
        $numPrimo=$arrRango[$x];
        for ($i=0;$i<=(count($arrRango)-1);$i++){
            
            if (($arrRango[$i] % $numPrimo == 0) && ($arrRango[$i]>$numPrimo)){
                array_splice($arrRango, $i,1);
            }
        }
        return $arrRango;
    }

    function mostrarNumerosPrimos($arrRango, $tope){
        echo "<h1>Números Primos hasta el $tope</h1>";
        for ($i=0;$i<count($arrRango);$i++){
            echo "<h1>$arrRango[$i]</h1>";
        }
    }

?>       
