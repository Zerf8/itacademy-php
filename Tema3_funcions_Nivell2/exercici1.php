<?php 
// - Exercici 1
// Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. 
// Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.

llistatOlimpic();

function llistatOlimpic() {
    for ($i=1960;$i<=2016;$i=$i+4){
        echo "<p>$i</p>";
    }
}

?>