<?php
    // - Exercici 1
    // Escriu un programa en PHP per convertir una cadena en un array 
    //(retallant cada caràcter i eliminant les línies buides).
    
    // Entrada
    // Hello world
    
    // Sortida
    // array(10) { [0]=> string(1) "H" [1]=> string(1) "e" [2]=> string(1) "l" [3]=> string(1) "l" [4]=> string(1) "o" 
    //    [5]=> string(1) "W" [6]=> string(1) "o" [7]=> string(1) "r" [8]=> string(1) "l" [9]=> string(1) "d"}
?>

    <hr />
    <h2>Escribe un texto</h2>

    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>

<?php
    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        $cadena= $_POST['valor1'];

        $x=0;
        $arrCaracteres=[]; //inicializamos array

        for ($i=0;$i<=(strlen($cadena)-1);$i++) {
            //echo substr($cadena, $i,1);
            if (substr($cadena, $i,1) != " ") {
                $arrCaracteres = guardarEnArray(substr($cadena, $i,1), $x, $arrCaracteres);
                $x++;
            }    
        }

        var_dump($arrCaracteres);

    }    

    function guardarEnArray($caracter, $posicion,$arrCaracteres) {
      
        //echo $caracter  . " " . $posicion .  "<br> ";
        $arrCaracteres[$posicion]=$caracter;
        
        return $arrCaracteres;        
    }
?>    