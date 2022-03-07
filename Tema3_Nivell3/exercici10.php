<?php
// - Exercici 3
// $ X = array (10, 20, 30, 40, 50);

// Elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades.

// Per example: Eliminant el número 40
// Sortida
// array(5) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(40) [4]=> int(50) }
// array(4) { [0]=> int(10) [1]=> int(20) [2]=> int(30) [3]=> int(50) }
// Consell: pot ser que les funcions var_dump () i / o print_r () et resultin útils per a visualitzar el contingut de les teves arranjaments.

    $arr = array (10, 20, 30, 40, 50);

    array_splice($arr, 3,1);
    var_dump($arr);
?>

