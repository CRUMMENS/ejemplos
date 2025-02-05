<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<title>ejemplo3(PHP07)</title>
<link rel="stylesheet" type="text/css"
    href="http://robertsallent.com/css/generic.css">
    </head>
    
    <body>
    
    <h1>EJEMPLOS PHP07</h1>
    <br>
    
    <h2>Formulario que permite introducir datos en la tabla 'tabla'
    sin conexion a una base de dato (con options y checkbox) :</h2>
    
    <form method="POST" autocomplete="OFF">
    
        <fieldset>
        
        	<legend>Datos</legend>
        	<label>Usuario:</label>
			<input type="text" name="usuario">
			<br>
			
        	<label>Clave:</label>
			<input type="password" name="pwd">
			<br>	
			
			<input type="radio" name="sexo" value="H" checked>
			<label>Hombre</label>	
			<input type="radio" name="sexo" value="M">
			<label>Mujer</label>	
			<br>
			
			<select name="provincia">
			
				<option value="BAR">Barcelona</option>
				<option value="GIR" selected>Girona</option>
			
			</select>
			     
        </fieldset>

    	<fieldset>
    	
    		<legend>Vehículo</legend>
    		<input type="checkbox" name="bici" value="1">
    		<label>Tengo bici</label>
    		<br>
    		
    		<input type="checkbox" name="moto" value="1">
    		<label>Tengo moto</label>
    		<br>
    		
    		<input type="checkbox" name="coche" value="1">
    		<label>Tengo coche</label>
    		<br>		
    	
    	</fieldset>
    	
    	<input type="submit" class="button" name="guardar" value="Guardar">
    	<input type="reset" class="button" value="Borrar">
    	
     </form>
     
     
     
    <?php

    if(!empty($_POST['guardar'])) {
        
        //tomamos los valores que llegan 
        $us = $_POST['usuario'];       //input text
        $pa = $_POST['pwd'];           //input password (encriptado)
        $se = $_POST['sexo'];          //input radio
        $pr = $_POST['provincia'];     //select
        
        //para los checkboxes hay que mirar si llegan o no 
        $bi = empty($_POST['bici']) ? 0 : 1;
        $mo = empty($_POST['moto']) ? 0 : 1;
        
        //tambien se puede hacer con operador ??
        //si llega le pondrá el valor quue llega (1), sino 0
        $co = $_POST['coche'] ?? 0;
        
        //preparamos la consulta ... 
        $consulta = "INSERT INTO tabla(user , pass , sexo , provincia , bici , moto , coche)
                    VALUES('$us' , '$pa', '$se' , '$pr' , '$bi' , '$mo' , '$co' )";

        //visualizamos la consulta a ver si es correcta
        echo $consulta; 
                        
    }
    
    ?>

	</body>
</html>