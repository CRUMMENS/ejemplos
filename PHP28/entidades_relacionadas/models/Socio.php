<?php

#[\AllowDinamicProperties]

class Socio extends Model {
    
    public function getPrestamos():array{
        $consulta = "SELECT * FROM prestamos WHERE idsocio=$this->id";
        
        //retorna una lista de Ejemplar
        return DBMysqli::selectAll($consulta, 'Prestamo');
    }
}