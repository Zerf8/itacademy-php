<?php
//    - Exercici 2
//    Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.
?>

<hr />
    <h2>Escribe un texto y un carácter a buscar</h2>
    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input value="" name="caracterBuscar" id="caracterBuscar" type="text"  />
    <input type="submit" value="enviar" />
    </form>

 


<?php

    
    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        $cadena= $_POST['valor1'];
        echo "<h2>$cadena</h2>";
        $caracterBuscar= $_POST['caracterBuscar'];

        $x=0;
        $arrCaracteres=[]; //inicializamos array

        for ($i=0;$i<=(strlen($cadena)-1);$i++) {
            //echo substr($cadena, $i,1);
            if (substr($cadena, $i,1) != " ") {
                $arrCaracteres = guardarEnArray(substr($cadena, $i,1), $x, $arrCaracteres);
                $x++;
            }    
        }

        //var_dump($arrCaracteres);

        buscarCaracterArray($arrCaracteres, $caracterBuscar);
    }    

   

    function guardarEnArray($caracter, $posicion,$arrCaracteres) {
      
        //echo $caracter  . " " . $posicion .  "<br> ";
        $arrCaracteres[$posicion]=$caracter;
        
        return $arrCaracteres;        
    }

    function buscarCaracterArray($arrCaracteres, $caracterBuscar){
        $numApariciones=0;
        for ($i=0;$i<=(count($arrCaracteres)-1);$i++) {
            if ($arrCaracteres[$i]==$caracterBuscar) {
                $numApariciones++;
            }
        }    
        echo "<h2>El carácter '$caracterBuscar' aparece en $numApariciones ocasiones</h2>";
    }

?>    