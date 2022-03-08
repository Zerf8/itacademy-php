<?php 
    require_once "claseCalculo.php";

    //se instancia el objeto
    $calcular = new Calculadora();

    $val1=$_POST['val1'];
    $val2=$_POST['val2'];
    $opcion=$_POST['opcion'];

    echo $calcular->calcularDatos($val1,$val2,$opcion);
?>