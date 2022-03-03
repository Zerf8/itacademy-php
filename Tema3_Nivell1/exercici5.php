<?php 
    /*
   - Exercici 5
        Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

        Afegeix un valor més a l'array que conté 3 integers.
        Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
        Ara imprimeix per pantalla l'array resultant valor a valor.
        Consell: pot ser que les funcions var_dump () i / o print_r () et resultin útils per a visualitzar el contingut de les teves arrays.
    */

    $arr1 = array(1, 2, 4, 8, 12);
    $arr2 = array(1, 2, 3);

    $arr2[]=4;

    $arrMezcla = array_merge($arr1, $arr2);

    echo "<p>Tamaño array mezcla: ".sizeof($arrMezcla)."</p>";
    echo "<br>";
    
    echo var_dump($arrMezcla);
    echo "<br>";
    
    for ($i=0;$i<sizeof($arrMezcla);$i++){
        echo "arrMezcla[$i] > $arrMezcla[$i]<br>";
    }


?>