<?php
session_start();
if (isset($_SESSION['usuario'])) {
	header("Location:" . base_url() . "index.php/inicio");
	die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="icon" href="<?= base_url() ?>assets/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#000000" />
	<meta name="description" content="Web site created using create-react-app" />
	<title>Fletes</title>

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/App.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/navbar.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css" />

	<script src="https://kit.fontawesome.com/9ef2b94efc.js" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="horizontal">
		<img src="<?= base_url() ?>assets/logo.png" alt="brand-logo" />
		<ul>
			<li title="Insertar registro">
				<a href="<?= base_url() ?>index.php/insert">
					Insertar registro
					<i class="fas fa-plus"></i>
				</a>
			</li>
			<li title="Mostrar registros">
				<a href="<?= base_url() ?>index.php/inicio">
					Mostrar Registros
					<i class="fas fa-list-ul"></i>
				</a>
			</li>
			<li>
				<a href="<?= base_url() ?>index.php/login">
					Iniciar sesión
					<i class="fas fa-user"></i>
				</a>
			</li>
		</ul>
	</nav>
	<div id="root">
		<div class="App">
			<div class="modal-container">
				<div class="brand-img"></div>
				<div class="form-container">
					<div class="formulario">
						<form action="<?= base_url() ?>index.php/Crud_select/loginUser" method="post">
							<div class="button-options-container">
								<div class="div-btn selected-ub" id="userOptionLogin">
									Iniciar sesión
								</div>
							</div>
							<input class="inputUserData" name="correoL" type="email" placeholder="Dirección de email" required></input>
							<input class="inputUserData" name="passwordL" type="password" placeholder="Contraseña" required></input>
							<input type="submit" name="login" value="Ingresar" class="ApiLog btnEntrar"></input>
						</form>

						<form action="<?= base_url() ?>index.php/Crud_select/registerUser" method="post">
							<div class="button-options-container">
								<div class="div-btn" id="userOptionRegister">
									Regístrate
								</div>
							</div>
							<div class="inputForm" id="nameForm">
								<input class="inputUserData" type="text" name="nombre" placeholder="Nombre"></input>
								<input class="inputUserData" type="text" name="apellido" placeholder="Apellido"></input>
							</div>
							<input class="inputUserData" type="email" name="correo" placeholder="Dirección de email"></input>
							<input class="inputUserData" type="password" name="password" placeholder="Contraseña"></input>
							<input type="submit" name="register" value="Registrarse" class="ApiLog btnEntrar"></input>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>