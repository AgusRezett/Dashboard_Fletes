<?php
class Crud_update extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Crud_model_update');
	}

	public function mostrarRegistro()
	{
		$id = $this->input->get('id');
		$result['data'] = $this->Crud_model_update->displayFleteById($id);
		$this->load->view('insertrecord', $result);
	}

	public function actualizarRegistro()
	{
		if ($this->input->post('save')) {
			$data['id_flete'] = $this->input->get('id');
			$data['direccion'] = $this->input->post('direccion');
			$data['costo'] = $this->input->post('costo');
			$data['costo_adicional'] = $this->input->post('costoad');
			$data['fecha_pedido'] = $this->input->post('fechapedido');
			$data['fecha_entrega'] = $this->input->post('fechaentrega');
			$data['tipo'] = $this->input->post('tipo');
			$response = $this->Crud_model_update->actualizarFlete($data);

			if ($response == true) {
				echo "Registro actualizado correctamente";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			} else {
				echo "Registro rechazado";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			}
		}
	}

	public function actualizarNombre()
	{
		if ($this->input->post('updateName')) {
			$data['id_usuario'] = $this->input->get('id');
			$data['nombre'] = $this->input->post('nombre');
			$data['apellido'] = $this->input->post('apellido');
			$response = $this->Crud_model_update->actualizarNombreUser($data);

			if ($response == true) {
				echo "Usuario actualizado satisfacotriamente";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			} else {
				echo "Usuario no actualizado";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			}
		}
	}

	public function actualizarPassword()
	{
		if ($this->input->post('updatePsw')) {
			$data['id_usuario'] = $this->input->get('id');
			$data['password'] = $this->input->post('password');
			$confirmPassword = $this->input->post('confirmPassword');
			if ($data['password'] == $confirmPassword) {
				$response = $this->Crud_model_update->actualizarContraseñaUser($data);
				if ($response == true) {
					echo "Contraseña actualizada";
					echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
				} else {
					echo "No se ha podido actualizar la contraseña";
					echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
				}
			} else {
				echo "Las contraseñas no coinciden";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			}
		}
	}
}
