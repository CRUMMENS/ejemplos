#[\AllowDynamicProperties()

<?php

//clase Libro
  
class Libro {
    
    //NO se indica las PROPIEDADES , las creará dinámicamente ..
    // .. con el método fetch_object() a partir de los campos ..
    // .. recuperados en la consulta
    
    //NO se indica el CONSTRUCTOR , da problemas con fetch_object()
    
    //Implementar método toString() solamente para demostrar que funciona 
    public function __toString() {
        return "$this->titulo , de $this->autor. Editorial $this->editorial.";
    }
}
