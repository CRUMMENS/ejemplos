<?php

#[\AllowDinamicProperties]

class Libro extends Model {
    
    public function getEjemplares():array{
        $consulta = "SELECT * FROM ejemplares WHERE idlibro=$this->id";
        
        //retorna una lista de Ejemplar 
        return DBMysqli::selectAll($consulta, 'Ejemplar');
    }
    
    
    /**
     * Recupera los temas de un libro
     * 
     * @return array lista de temas del libro
     */
    public function getTemas():array {
        $consulta = "SELECT t.* 
                    FROM temas t
                    INNER JOIN temas_libros tl ON t.id=tl.idtema
                    WHERE tl.idlibro=$this->id";
        
        //retorna una lista de Temas
        return DBMysqli::selectAll($consulta , 'Tema');
    }
}