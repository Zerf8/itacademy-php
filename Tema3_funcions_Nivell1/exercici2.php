<?php 
// - Exercici 2
// Per jugar a el "amagatall" se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 

// Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.


    contarDe2en2();

    function contarDe2en2() {
        for ($i=0;$i<=10;$i=$i+2){
            echo "<p>$i</p>";
        }
    }
?>    

