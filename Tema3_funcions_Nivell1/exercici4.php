<?php 
// - Exercici 4
// Per prevenir oblits a l'utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte.
    
    contarDe2en2($tope=10);

    function contarDe2en2($tope) {
        for ($i=0;$i<=$tope;$i=$i+2){
            echo "<p>$i</p>";
        }
    }

?>

