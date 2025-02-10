<?php

//Clase Coche
class Coche extends Vehiculo{
    
    public function arrancar() {
        echo "Brum Brum";
    }
    
    public function __toString(){
        return "Coche: ".parent::__toString();
    }
}

?>