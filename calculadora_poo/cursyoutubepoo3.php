<?php 
//una clase es nuestro molde de Trabajo para 
//nuestros Métodos y Atributos

class MiClase {
    //definir los atributos (también llamadas propiedades)
    public $resultado=0;

    //definir los métodos
    public function miMetodo($v1,$v2){
        
        $this->resultado = $v1 + $v2;
        return $this->resultado;
    }

}
//termina MiClase

//aquí instanciamos o declaramos un objeto
$miObjeto = new MiClase();

echo $miObjeto->miMetodo(5,7); //llamamos al método

?>