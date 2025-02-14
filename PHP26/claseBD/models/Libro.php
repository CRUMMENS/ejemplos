#[\AllowDynamicPropieties]

<?php
class Libro {

    // NO se indica propiedades ni constructor
    // METODO selectAll() : recupera un array con todos los libros

    public static function all():array {
        return DBMysqli::selectAll("SELECT * FROM libros" , self::class);
    }
    
    
    //METODO : recupera un libro a partir de su ID (null si no lo encuentra)
    public static function find(int $id) : Libro {
        
        $consulta = "SELECT * FROM libros WHERE id = $id" ; 
        return DBMysqli::select($consulta, self::class);
    }
    
    
    // .................................................................................
    //METODO save(): guarda un nuevo libro en la BDD
    
    public function save():int {
        
        //prepara la consulta de insercion 
        $consulta = "INSERT INTO libros ( 
                    isbn, titulo, editorial, idioma, autor, 
                    edicion, anyo, edadrecomendada, portada,
                    caracteristicas, sinopsis, paginas
                    ) VALUES (
                   '$this->isbn', '$this->titulo', '$this->editorial', '$this->idioma', '$this->autor',
                   $this->edicion, '$this->anyo', $this->edadrecomendada, '$this->portada',
                   '$this->caracteristicas', '$this->sinopsis', $this->paginas)";
                   
       //guardar el nuevo libro en la BDD y actualiza su ID con el autonumerico
       $this -> id = DBMysqli::insert($consulta);
       
       //retorna el id del nuevo libro (o 0 si no hay campo autoincremental)
       return $this->id;
    }
    
    
    // .................................................................................
    //METODO update() : actualiza un libro en la base de datos
    
    public function update():int {
        
        //prepara la consulta
        $consulta = "UPDATE libros SET 

                    isbn               = '$this->isbn',
                    titulo             = '$this->titulo',
                    editorial          = '$this->editorial',
                    idioma             = '$this->idioma',
                    autor              = '$this->autor',
                    edicion            =  $this->edicion ,
                    anyo               = '$this->anyo',
                    edadrecomendada    =  $this->edadrecomendada ,
                    portada            = '$this->portada',
                    caracteristicas    = '$this->caracteristicas',
                    sinopsis           = '$this->sinopsis',
                    paginas            =  $this->paginas
                    
                    WHERE id = $this->id";
        
        //lanza la consulta y retorna el numero de filas afectadas
        return DBMysqli::update($consulta);
    }

    
    // .................................................................................
    //METODO delete () : metodo estatico 
    
    //METODO delete () : metodo de objeto (PAG 42)

    
    
}
?>