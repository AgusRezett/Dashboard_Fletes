<?php
session_start();
if (isset($_SESSION['usuario'])) {
	$account = '<li title="Configuración de perfil">
						<a href="' . base_url() . 'index.php/cuenta">
							' . $_SESSION['usuario'] . '
							<i class="fas fa-user"></i>
						</a>
					</li>
					<li title="Configuración de perfil">
						<a href="' . base_url() . 'index.php/cerrar_sesion">
							Cerrar sesión
							<i class="fas fa-user"></i>
						</a>
					</li>';
} else {
	$account = '<li>
						<a href="' . base_url() . 'index.php/login">
							Iniciar sesión
							<i class="fas fa-user"></i>
						</a>
					</li>';
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

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/App.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/navbar.css" />

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

			<?php echo $account ?>
		</ul>
	</nav>
	<div id="root">
		<div class="App">
			<table class="tg">
				<thead>
					<tr>
						<th class="tg-0lax">ID</th>
						<th class="tg-0lax">DIRECCIÓN</th>
						<th class="tg-0lax">TIPO</th>
						<th class="tg-0lax">COSTO</th>
						<th class="tg-0lax">ADICIONAL</th>
						<th class="tg-0lax">F. PEDIDO</th>
						<th class="tg-0lax">F. ENTREGA</th>
						<th class="tg-0lax">Cambiar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (count($displayFletes) > 0) {
						foreach ($displayFletes as $row) {
							echo '<tr>' .
								'<td class="tg-0lax">' . $row->id_flete . '</td>' .
								'<td class="tg-0lax">' . $row->direccion . '</td>' .
								'<td class="tg-0lax">' . $row->tipo . '</td>' .
								'<td class="tg-0lax">' . $row->costo . '</td>' .
								'<td class="tg-0lax">' . $row->costo_adicional . '</td>' .
								'<td class="tg-0lax">' . $row->fecha_pedido . '</td>' .
								'<td class="tg-0lax">' . $row->fecha_entrega . '</td>' .
								'<td class="tg-0lax">
								<a href="' . base_url() . 'index.php/Crud_update/mostrarRegistro?id=' . $row->id_flete . '"><i class="fas fa-pen"></i></a>
								<a href="' . base_url() . 'index.php/Crud_delete/eliminarRegistro?id=' . $row->id_flete . '"><i class="fas fa-trash"></i></a></td>' .
								'<tr>';
						}
					} else {
						echo '<td class="tg-0lax" colspan="8" >No se encontraron registros</td>';
					}
					?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>