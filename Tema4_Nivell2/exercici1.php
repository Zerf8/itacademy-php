<?php 
// - Exercici 1
// Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

// Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

// Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.

// Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

// A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus

    

    class PokerDice {
        public $tirada;
        public $arrDado=["A","K","Q","J","7","8"];
        public $caraDado;
        static $totalTirades=0;
        
        static function getTotalThrows ()  {
             PokerDice::$totalTirades++;
             return "Tirada: ". PokerDice::$totalTirades;
        }

        function throw() {
            $this->tirada=rand(1,6);

        }

        function shapeName() {
            $this->caraDado=$this->arrDado[$this->tirada - 1];
            
            return $this->caraDado;
        }

    }

    tirar5Daus();

    function tirar5Daus(){
        for ($i=0;$i<5;$i++) {
            $dau[$i]= new PokerDice();
            $dau[$i]->throw();
            echo PokerDice::getTotalThrows();
            echo "<p>".$dau[$i]->shapeName() ."</p>";
            
        }
    }



    
?>