
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<title>ejemplo1(PHP04)</title>
		<link rel="stylesheet" type="text/css"
			  href="http://robertsallent.com/css/generic.css">
	</head>

	<body>
	
		<h1> Tipos de datos</h1>
		<h3>Los tipos de variables se determinan dinámicamente , 
		en función del tipo de dato que guardamos en ella</h3>
		
        <?php
        $variable = 100;        //integer
            echo "<p>La variable es de tipo : ".gettype($variable)."</p>";
                   
        $variable = 100.0;  //float o double
            echo "<p>La variable es de tipo : ".gettype($variable)."</p>";
            
        $variable = true;  //boolean
            echo "<p>La variable es de tipo : ".gettype($variable)."</p>";
            
        $variable = 'Calçot';  //string
            echo "<p>La variable es de tipo : ".gettype($variable)."</p>";
        
        $variable = [1, 2, 3];  //array
            echo "<p>La variable es de tipo : ".gettype($variable)."</p>";
            
        $variable = NULL;  //null
            echo "<p>La variable  es de tipo : ".gettype($variable)."</p>";
            
        $variable = new stdClass();  //objeto
            echo "<p>La variable es de tipo : ".gettype($variable)."</p>";
            
        ?>	
        
        <h3>Forzando tipos</h3>
		
        <?php
        // variable tipo string
        $variable = "9.99 es el precio de los pantalones";   
            echo "<p>La variable es de tipo : ".gettype($variable)." y vale $variable</p>";
          
        //"cast" de tipo double
        $variable = (double) $variable;  
        echo "<p>La variable es de tipo : ".gettype($variable)." y vale $variable</p>";
        
        //conversion de double a int con settype
        settype ($variable, 'int');
        echo "<p>La variable es de tipo : ".gettype($variable)." y vale $variable</p>";
        
        //ERROR : deberia dar 9 de resultado: PHP04 pag18
        //cambio de tipo a String aprovechando la determinación dinámica:
        $variable = ''; 
        echo "<p>La variable es de tipo : ".gettype($variable)." y vale $variable</p>";
        
        //ERROR : deberia dar 9 de resultado: PHP04 pag18
        //conversion de String a int con intval()
        $variable = intval($variable) ;
        echo "<p>La variable es de tipo : ".gettype($variable)." y vale $variable</p>";
      
        ?>	
        
        
        <h3>Al intentar hacer una suma , PHP asumirá que los operarios deben ser
        numéricos y realizará una conversión implícita:</h3>
        
        <?php
        
        $peli1 = "101 dalmatas"; //variable de tipo String
        $peli2 = "28 dias";      //variable de tipo String
		    
        //el operador @ delante de una operacion oculpa los Warnings
        @$resultado = $peli1 + $peli2;
        
        echo "<p>peli1 = 101 dalmatas </p>" ;
        echo "<p>peli2 = 28 dias </p>" ;
        
        echo "<p>peli1 + peli2 = $resultado</p>";
        echo "<p> El resultado es de tipo :".gettype($resultado)."</p>";
        
        
        
        
        
        ?>
	</body>
</html>