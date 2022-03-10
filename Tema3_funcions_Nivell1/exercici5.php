<?php 
// - Exercici 5
// Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.

// Condicions

// Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
// Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
// Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
// Si la nota és menor a 33%, l'estudiant reprovarà.
?>

    <hr />
    <h2>Escribe la nota (de 0 a 100)</h2>

    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="nota1" id="nota1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>

<?php
    if(isset($_POST['insert']) && ($_POST['nota1'])!="") {
        verificarGrau($_POST['nota1']);
    }    

    function verificarGrau($nota) {
        $grau="";
        if ($nota >=60) {
            $grau="PRIMERA DIVISIÓ";
        }
        else if ($nota >44) {
            $grau="SEGONA DIVISIÓ";
        }
        else if ($nota >32) {
            $grau="TERCERA DIVISIÓ";
        }
        else  {
            $grau="REPROVAT";
        }
        
        echo "<h2>$grau</h2>";
    }

?>

