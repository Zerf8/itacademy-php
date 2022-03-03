VOY POR AQUI


<?php 
/*
- Exercici 2
Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada i imprimeix la nova cadena.

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

    <hr />
    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input value="" name="valor2" id="valor2" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>


<?php

    if(isset($_POST['insert']) && ($_POST['valor1'])!="" && ($_POST['valor2'])!="") {

        if ($_POST['valor1'] != $_POST['valor2']) {
            echo "<p>La suma de ". $_POST['valor1'] ." y ". $_POST['valor2'] ." es " . ($_POST['valor1'] + $_POST['valor2'])."</p>";
        }
        else
        {
            echo "<h2>¡¡¡NÚMEROS IGUALES!!!</h2>";
            echo "(".$_POST['valor1'] ." + ". $_POST['valor2'] .") x 2 = ". (($_POST['valor1'] + $_POST['valor2'])*2);
        }
    } 

?>