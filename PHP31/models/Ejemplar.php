<?php

#[\AllowDinamicProperties]

class Ejemplar extends Model {
    

    public function getPrestamos():array{
        $consulta = "SELECT * FROM prestamos WHERE idejemplar=$this->id";
        
        //retorna una lista de Ejemplar
        return DBMysqli::selectAll($consulta, 'Prestamo');
    }
    
    
    /** @var string $table nombre de la tabla a usar */
    protected static string $table = 'ejemplares';
    
    //como la tabla no se llama 'ejemplars' , si no 'ejemplares' , necesitamos indicar
    // la propiedad $table anterior , para indicar a la clase Model que use el nombre correcto
    
    /**
     * Recupera el libro al que pertenece el ejemplar
     * 
     * @retorn Libro|NULL
     */
    public function getLibro() : ? Libro {
        $consulta = "SELECT * FROM libros WHERE id=$this->idlibro";
        return DBMysqli::select($consulta, 'Libro');
    }
}