<?php 
// - Exercici 2
// Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord a les següents premisses:

// Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.
// Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

?>
    <h2>Escribe la cantidad de minutos de la llamada
    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>


<?php

    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        determinarCosteLlamada($_POST['valor1']);
        
    } 

    function determinarCosteLlamada($minutosLlamada) {
        if ($minutosLlamada <4) {
            $costeLlamada=0.10;
        }
        else
        {
            $costeLlamada=(($minutosLlamada - 3) * 0.05) + 0.10;
        }
        echo "<h2>El coste de llamada por $minutosLlamada minutos es de $costeLlamada euros</h2>";
    }

?>