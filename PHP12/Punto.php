    <?php

    class Punto{
        
        //PROPIEDADES
        public int $x = 0;
        public int $y = 0;
        
        //CONSTRUCTOR
        // __construct(): crea un punto a partir de dos coordenadas (opcionales)
        public function __construct(int $x =0 , int $y = 0){
            $this->x = $x;    //inicializa la propiedad X con la que lo recibe
            $this->y = $y;    //inicializa la propiedad Y con la que lo recibe
        }
        
        
        
        //METODOS:
        // __toString(): devuelve una representación del objeto como texto
        public function __toString():string{
            return"($this->x, $this->y)";
        }
        
        
        //metodo de objeto para desplazar un Punto 
        public function mover(
        int $dx = 0,           //desplazamiento en el eje X
        int $dy = 0           //desplazamiento en el eje Y
        ): Punto {
            $this->x += $dx;
            $this->y += $dy;      
            
            return $this;
        }        
        
        
        //metodo de objeto para llevar un Punto a (0,0) 
        public function aOrigen(): Punto {
            $this->x = 0; 
            $this->y = 0;
            
            return $this;
        }        
        
        
    }
        
    

        

    
    ?>