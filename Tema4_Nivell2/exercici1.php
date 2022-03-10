
<?php 
// - Exercici 1
// Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

// Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

// Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.

// Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

// A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action="#">
            <input name="insert" type="hidden"  />        
            <input type="submit" value="TIRAR DADOS" />
        </form>    

    </body>
    </html>
<?php 
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

    //instanciamos los 5 dados
        for ($i=0;$i<5;$i++) {
            $dau[$i]= new PokerDice();
        }    
        
        if(isset($_POST['insert'])) {
            tirar5Daus($dau);
        }

        function tirar5Daus($dau){
            for ($i=0;$i<5;$i++) {
                $dau[$i]->throw();
                echo PokerDice::getTotalThrows();
                echo "<p>".$dau[$i]->shapeName() ."</p>";
            }
        }
        
    
?>
