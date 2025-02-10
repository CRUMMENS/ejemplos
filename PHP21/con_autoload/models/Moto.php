<?php

//Clase Moto
class Moto extends Vehiculo{
    
    public function arrancar() {
        echo "Braaaaaaaam braaaaaaam";
    }
    
    public function __toString(){
        return "Moto: ".parent::__toString();
    }
}

?>