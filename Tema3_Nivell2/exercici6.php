<?php 
/*
- Exercici 1
    Escriure un programa PHP per calcular la suma dels dos valors enters donats. Si els dos valors són iguals, torna el doble de la seva suma.

    Exemple

    Entrada
    1, 2
    3, 2
    2, 2

    Sortida
    3
    5
    8
*/

?>

    <hr />
    <h2>Escribe dos números enteros</h2>
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