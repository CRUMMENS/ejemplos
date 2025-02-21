<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>Lista socios</title>
		<link rel  ="stylesheet" type= "text/css"
			  href = "https://robertsallent.com/css/generic.css">
	</head>
	
	
	<body>
	
		<h1>Socios de la biblioteca</h1>
		
		<menu class="menu">
			<li><a href = "index.php">Inicio</a>
			<li><a href = "index.php?controlador=socio/list" class="activo">
				Lista de socios</a></li>
			<li><a href = "index.php?controlador=socio/create">
				Nuevo socio</a></li>
		</menu>
		
		
		<h2>Lista de socios</h2>
		
			
			

		<form method="POST" class="search" action="index.php?controlador=socio/search">
		
			<label>Campo:</label>
			<select name="campo">
				<option value="nombre"
						<?= !empty($campo) && $campo == 'nombre' ? 'selected' : '' ?>
						>Nombre</opcion>
				<option value="apellidos"
						<?= !empty($campo) && $campo == 'apellidos' ? 'selected' : '' ?>
						>Apellidos</opcion>	
				<option value="poblacion"
						<?= !empty($campo) && $campo == 'poblacion' ? 'selected' : '' ?>
						>Poblacion</opcion>	
			</select>
			
			
			<label>Valor:</label>
			<input type="text" name="valor" value="<?= $valor ?? '' ?>">
			
			
			<label>Orden:</label>
			<select name="orden">
				<option value ="nombre"
				<?= !empty($orden) && $orden == 'nombre' ? 'selected' : '' ?>
						>Nombre</opcion>
				<option value ="apellidos"
				<?= !empty($orden) && $orden == 'apellidos' ? 'selected' : '' ?>
						>Apellidos</opcion>
				<option value ="poblacion"
				<?= !empty($orden) && $orden == 'poblacion' ? 'selected' : '' ?>
						>Poblacion</opcion>
			</select>
			
			<input type="radio" name="sentido" value="ASC"
				<?= empty($sentido) || $sentido == 'ASC' ? 'checked' : '' ?>>
				<label>ASC</label>
				
			<input type="radio" name="sentido" value="DESC"
				<?= empty($sentido) || $sentido == 'DESC' ? 'checked' : '' ?>>
				<label>DESC</label>
				
			<input type="submit" class="button" name="filtro" value="Filtrar">
			
			<a class="button" href="index.php?controlador=socio/list">Quitar filtros</a>
	
		</form>
		
		

		<table class="bloqueCentrado w100">
		
			<tr>
				<th>Nombre</th> 
				<th>Apellidos</th>
				<th>Poblacion</th>
				<th>Operaciones</th>
			</tr>
		
    		<?php foreach ($socios as $socio){ ?>
    		
    		<tr>
    			<td> <?= $socio->nombre?> </td>
    			<td> <?= $socio->apellidos?> </td>
    			<td> <?= $socio->poblacion?> </td>
    			<td>
    				<a href='index.php?controlador=socio/show&id=<?= $socio->id?>' 
    				class=button>Ver</a>
    				<a href='index.php?controlador=socio/edit&id=<?= $socio->id?>' 
    				class=button>Editar</a>
    				<a href='index.php?controlador=socio/delete&id=<?= $socio->id?>' 
    				class=button>Borrar</a>
    			</td>
    		</tr>
    		
    		<?php } ?>
		
		</table>
		
	</body>

</html>