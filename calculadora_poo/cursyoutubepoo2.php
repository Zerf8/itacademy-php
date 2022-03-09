<?php 
//una clase es nuestro molde de Trabajo para 
//nuestros Métodos y Atributos

class MiClase {
    //definir los atributos (también llamadas propiedades)
    public $atributo1="Hola Mundo";

    //definir los métodos
    public function miMetodo(){
        //como podemos llamar un atributo
        //utilizando la pseudo variable this

        return $this->atributo;
    }

}

?>