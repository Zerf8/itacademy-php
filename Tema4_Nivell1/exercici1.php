<?php
// - Exercici 1
// Crea una classe Employee defineix com a atributs el seu nom i sou. 
// Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
// Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos).

class Employee {
   
    // Declaración de un método
    public function initialize($nom, $sou) {
        $this->nom = $nom;
        $this->sou = $sou;        
    }

    // Declaración de otro método
    public function printar() {
        echo $this->nom;
        
        if ($this->sou > 6000) {
            echo " Has de pagar impostos perque el teu sou es de ". $this->sou . " euros";
        }
        else {
            echo " No has de pagar impostos perque el teu sou es de ". $this->sou . " euros";
        }
    }
}
    //instanciar objeto
    $empleat1 = new Employee();
    $empleat1->initialize("Alberto",7000); //llamamos al método
    $empleat1->printar(); //llamamos al método sin parámetros porque ya hemos inicializado y se mantienen los valores en toda la clase
?>