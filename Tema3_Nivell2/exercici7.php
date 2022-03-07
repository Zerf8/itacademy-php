<?php 
/*
- Exercici 2
Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada i 
imprimeix la nova cadena.

Exemple

Entrada
wxyz
a
ab

Sortida
zxyw
a
ba
*/

?>
    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>


<?php

    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        $cadena= $_POST['valor1'];
        echo "<h1>". $cadena ."</h1>";

        $primerCaracter=substr($cadena, 0,1);
        $ultimoCaracter=substr($cadena,-1);

        $cadena=substr_replace($cadena, $ultimoCaracter, 0, 1);

        $cadena=substr_replace($cadena, $primerCaracter, -1);
        echo "<h1>". $cadena ."</h1>";

    } 

?>