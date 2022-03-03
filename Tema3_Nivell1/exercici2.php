<?php 
/*
        TEMA 3. NIVELL 1. EXERCICI 2
        Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després

        Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
        Imprimeix per pantalla la mida (longitud) de la variable.
        Imprimeix per pantalla el string en ordre invers de caràcters.
        Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.
    */
    
    $texto="Hello, World!";
    echo $texto;
    echo "<br>";
    echo strtoupper($texto);
    echo "<br>";
    echo strlen($texto);
    echo "<br>";
    echo strrev($texto);
    echo "<br>";
    $texto2 = "Aquest és el curs de PHP";
    echo $textConc = $texto . " " . $texto2; 


?>