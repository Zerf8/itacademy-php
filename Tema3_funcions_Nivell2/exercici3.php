<?php 
// - Exercici 3
// Imagina que som a una botiga on es ven

// Xocolata: 1 euro
// Xiclets: 0.50 euros
// Carmels: 1.50 euros
// Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

// 2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

// funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

// Sent per tant el total, 4.

?>
    <h2>Escribe la cantidad de ventas</h2>
    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    xocolata <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    xiclets <input value="" name="valor2" id="valor2" type="text"  />
    <br>
    carmels <input value="" name="valor3" id="valor3" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>


<?php

    if(isset($_POST['insert'])) {
        if ($_POST['valor1'] > 0) {
            $totalVendaXocolata=calcularVendaXocolata($_POST['valor1']);
            echo "<p>Venda Xocolata - ". $_POST['valor1'] . " unitats - ". $totalVendaXocolata. " euros</p>";
        }
        if ($_POST['valor2'] > 0) {
            $totalVendaXiclets=calcularVendaXiclets($_POST['valor2']);
            echo "<p>Venda Xiclets - ". $_POST['valor2'] . " unitats - ". $totalVendaXiclets. " euros</p>";            
        }
        if ($_POST['valor3'] > 0) {
            $totalVendaCarmels=calcularVendaCarmels($_POST['valor3']);
            echo "<p>Venda Carmels - ". $_POST['valor3'] . " unitats - ". $totalVendaCarmels. " euros</p>";            
        }
        
        echo "<h3>TOTAL</h3>";
        echo "<h4>" . ($totalVendaXocolata + $totalVendaXiclets + $totalVendaCarmels) . " euros</h4>";
    } 

    function calcularVendaXocolata($numXocolates) {
        return $numXocolates * 1;
    }    

    function calcularVendaXiclets($numXiclets) {
        return $numXiclets * 0.5;
    }    
    function calcularVendaCarmels($numCarmels) {
        return $numCarmels * 1.5;
    }    

     
?>