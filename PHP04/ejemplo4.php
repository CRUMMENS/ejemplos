
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<title>ejemplo4(PHP04)</title>
		<link rel="stylesheet" type="text/css"
			  href="http://robertsallent.com/css/generic.css">
	</head>

	<body>

        <h1>AMBITO DE VARIABLES</h1>
        
        <h2> Ambito local : </h2>
        
        <?php
        
        //funcion que imprime "Holis"
        function saludar(){
            $saludo = "Holis"; // crea una variable
            echo $saludo;      // la imprime
        // La función se muere una vez que termina la función.
        }
        
        // llamamos a la función saludar();
        saludar();
        
        //intentamos imprimir la variable desde fuera de la funcion
        //como no existe en ambito global , si no en local , no imprime. 
        echo $saludo;
        
        echo "<br>";
        echo "<p> AVISO: intentamos imprimir la variable desde fuera de la función . 
        Como no existe en ambito global , si no en local , no imprime el saludo :( </p>";
        
        ?>	
        
        
        <h2> Ambito estático : </h2>
        
        <?php
        
        //Esta función recuerda el valor entre distintas ejecuciones:
        function recordando() {
            
            //la inicialización se hace solamente la primera vez
            static $numero = 1 ; 
            
            echo "La variable vale $numero.<br>"; //muestra la variable
            $numero++;                            // incrementa en 1       
        }
        
        recordando();  //muestra 1
        recordando();  //muestra 2
        recordando();  //muestra 3
        recordando();  //muestra 4
        recordando();  //muestra 5
        
        //Aunque recuerde el valor , no se accede en ambito global
        //Por eso da un error (variable $numero sin definir) : 
        echo $numero ;
        
        echo "<br>";
        echo "<p> AVISO: Aunque recuerde el valor , no se accede en ambito global
        //Por eso da un error (variable numero sin definir) :( </p>";
        
        ?>	
        
       	<h2> Ambito superglobal : </h2>  
       	
       	<p> Ir al ejemplo2 (PHP04) para todos los ejemplos </p>
        
        
	</body>
</html>
