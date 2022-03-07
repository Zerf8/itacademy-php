<?php 
// - Exercici 3
// Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.
?>    
    <h2>¿Hasta dónde quieres que llegue esta cuenta?</h2>

    <form method="post" action="#">
    <input name="insert" type="hidden"  />
    <input value="" name="valor1" id="valor1" type="text"  />
    <br>
    <input type="submit" value="enviar" />
    </form>

<?php 
    if(isset($_POST['insert']) && ($_POST['valor1'])!="") {
        contarDe2en2($_POST['valor1']);
    }   

    function contarDe2en2($tope) {
        for ($i=0;$i<=$tope;$i=$i+2){
            echo "<p>$i</p>";
        }
    }

?>

