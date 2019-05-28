<?php

//var_dump($_POST);


if (!empty($_POST)) {

	$usuario = [
		'nombre' => $_POST['nombre'],
		'email' => $_POST['email'],
		'pass' => password_hash($_POST['password'], PASSWORD_DEFAULT),
	];
		
		$usuarios = file_get_contents ('usuarios.json');
		
		$usuarios_array = json_decode ($usuarios, true);
		
		$usuarios_array [] = $usuario; 
		
		$json_usuarios = json_encode($usuarios_array);
		
		file_put_contents ('usuarios.json', $json_usuarios);

}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styles.css">
		<title>Craftsy | Registrate</title>
	</head>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
			<header> <!-- Encabezadp -->
				<nav class="main-nav">
					<a href="index.html"><img class="logo" src="img/logo.png" alt="logo craftsy"></a>
					<ul class="menu">
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Tablets</a></li>
						<li><a href="#">Computadoras</a></li>
					</ul>
					<ul class="menu access">
						<li><a href="login.html">login</a></li>
						<li><a href="register.html">registro</a></li>
					</ul>
				</nav>
			</header>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="form-container">
					<h1>Registrate</h1>
						<form class="access-form" action="register.php" method="post"> <!--Abre formulario -->
				      <!-- input Nombre -->
							<div class="field-group">
								<label for="nombre">Nombre</label>
								<input type="text" id="nombre" name="nombre" placeholder="Ingresá tu nombre" required>
					      <!-- "id": vincula al label con el input.
					            "name": identifica al campo cuando se envía el form. El valor de del campo viene de lo que el usuario escribió en la caja de texto.-->
								<p class="form-text alert-hide">
									Obligatorio.
								</p>
							</div>
				      <!-- input Email -->
				      <div class="field-group">
				      	<label for="email">Email</label>
								<input type="email" id="email" name="email" placeholder="Ingresá tu emial" required>
					      <!-- "id": vincula al label con el input.
					            "name": identifica al campo cuando se envía el form. El valor de del campo viene de lo que el usuario escribió en la caja de texto.-->
								<p class="form-text alert-hide">
									Obligatorio.
								</p>
				      </div>
							<div class="field-group">
								<label for="password">Contraseña</label>
								<input type="password" id="passsword" name="password" placeholder="password" value="" required>
								<p class="form-text alert-hide">
									Obligatorio.
								</p>
							</div>
							
				      <button>Registrarme</button>
				      <button>Cancelar</button>

				    </form>
				</section>
			</main>
		</div>

	</body>
</html>
