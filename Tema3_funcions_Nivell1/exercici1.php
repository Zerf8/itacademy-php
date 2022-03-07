<?php 
// - Exercici 1
// Programa una funciò que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.

?>
  <h2>Escribe tu edad</h2>

    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>

<?php
    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        determinarPar($_POST['valor1']);
    }
    
    function determinarPar($valor) {
        if ($valor % 2 == 0) {
            echo "<h2>$valor es PAR</h2>";
        }    
        else
        {
            echo "<h2>$valor es IMPAR</h2>";            
        }    
    }

?>    

