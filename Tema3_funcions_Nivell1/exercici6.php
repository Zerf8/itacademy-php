<?php 
// - Exercici 6
// Charlie em va mossegar el dit!

// Charlie et mossegarà el dit exactament el 50% del temps.

// Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

// Consell: pot ser que la funció rand () et resulti útil.

    isBitten();

    function isBitten(){
        $probabilidad=rand(1,100);
        if ($probabilidad <= 50){
            echo "TRUE";
        }
        else
        {
            echo "FALSE";

        }
    }

?>

