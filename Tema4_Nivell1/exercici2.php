<?php
// - Exercici 2
// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
// Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

// A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.

class Shape
{
	protected $ample;
	protected $alt;

	function __construct($ample, $alt)
	{
		$this->ample = $ample;
		$this->alt = $alt;
	}
}

class Rectangle extends Shape
{
    function calcularArea(){
		return "<h2>Àrea del rectangle de $this->ample * $this->alt és " .$this->ample * $this->alt . "</h2>";
	}
}

class Triangle extends Shape
{
    function calcularArea(){
		return "<h2>Àrea del triangle de $this->ample * $this->alt és " . ($this->ample * $this->alt) /2 . "</h2>";        
	}
}

$rectangle1 = new Rectangle(5,4);
$triangle1 = new Triangle(6,3);


echo $rectangle1->calcularArea();
echo $triangle1->calcularArea();


?>