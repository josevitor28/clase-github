<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<title>Formulario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
	<body>
        
		<form id="registro" name="registro" method="post" action="script_guarda.php">
			<p>
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" id="nombre" />
			</p>
			<p>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" />
			</p>
			<p>
				<label for="pais">Pais:</label>
				<select name="pais" id="pais" >
				<option>Colombia</option>
				<option>Peru</option>
				<option>Chile</option>
				<option>Ecuador</option>
				<option>Argentina</option>
				</select>
			</p>
			<p>
				<label for="password">Contraseña:</label>
				<input type="password" name="password" id="password" />
			</p>
			<p>
				<input type="submit" name="enviar" id="enviar" value="Enviar" />
			</p>
		</form>
        
	</body>
</html>