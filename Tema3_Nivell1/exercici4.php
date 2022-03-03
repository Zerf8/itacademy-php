<?php 
    /*
   - Exercici 4
        Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. 
        
        A continuació, mostra per pantalla per a X i Y:

        El valor de cada variable
        La suma
        La resta
        El producte
        El mòdul

        Per N i M realitzaràs el mateix.

        Per a totes les variables (X, Y, N, M)

        El doble de cada variable
        La suma de totes les variables
        El producte de totes les variables
    */

    $x=9;
    $y=4;

    $n=6.2;
    $m=5.3;

    
    echo "<p>Valor de X es ".$x."</p>";
    echo "<p>Valor de Y es ".$y."</p>";
    echo "<p>X + Y =  ".$x + $y."</p>";
    echo "<p>X - Y =  ".$x - $y."</p>";
    echo "<p>X * Y =  ".$x * $y."</p>";
    echo "<p>Resto de X/Y =  ".$x % $y."</p>";

    echo "<p>Valor de N es ".$n."</p>";
    echo "<p>Valor de M es ".$m."</p>";
    echo "<p>N + M =  ".$n + $m."</p>";
    echo "<p>N - M =  ".$n - $m."</p>";
    echo "<p>N * M =  ".$n * $m."</p>";
    echo "<p>Resto de N/M =  ".$n % $m."</p>";

    echo "<p>El doble de X es ".($x * 2)."</p>";
    echo "<p>El doble de Y es ".($y * 2)."</p>";
    echo "<p>El doble de N es ".($n * 2)."</p>";
    echo "<p>El doble de M es ".($m * 2)."</p>";

    echo "<p>X + Y + N + M = " . ($x + $y + $n + $m)."</p>";
    echo "<p>X * Y * N * M = " . ($x * $y * $n * $m)."</p>";
    
    


?>