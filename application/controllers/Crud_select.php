<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Crud_select extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Crud_model_select');
	}

	public function loginUser()
	{
		if ($this->input->post('login')) {

			$data['correo'] = $this->input->post('correoL');
			$data['password'] = $this->input->post('passwordL');
			$consulta = $this->Crud_model_select->selectUser($data);

			if ($consulta == true) {
				session_start();
				foreach ($consulta as $row)
					$_SESSION['id'] = $row->id_usuario;
				$_SESSION['usuario'] = $row->nombre;
				$_SESSION['password'] = $row->password;
				header("Location:" . base_url() . "index.php/inicio");
			} else {
				echo "No se ha podido iniciar sesión";
			}
		}
	}

	/*Insert*/
	public function registerUser()
	{
		if ($this->input->post('register')) {
			$data['nombre'] = $this->input->post('nombre');
			$data['apellido'] = $this->input->post('apellido');
			$data['correo'] = $this->input->post('correo');
			$data['password'] = $this->input->post('password');
			$response = $this->Crud_model_select->saveUser($data);

			$url = base_url() . "index.php";
			if ($response == true) {
				session_start();
				foreach ($response as $row)
					$_SESSION['id'] = $row->id_usuario;
				$_SESSION['usuario'] = $row->nombre;
				$_SESSION['password'] = $row->password;
				header("Location:$url/inicio");
			} else {
				echo "Insert error !";
			}
		}
	}

	public function insertRecord()
	{
		if ($this->input->post('save')) {
			$data['direccion'] = $this->input->post('direccion');
			$data['costo'] = $this->input->post('costo');
			$data['costo_adicional'] = $this->input->post('costoad');
			$data['fecha_pedido'] = $this->input->post('fechapedido');
			$data['fecha_entrega'] = $this->input->post('fechaentrega');
			$data['tipo'] = $this->input->post('tipo');
			$response = $this->Crud_model_select->saveRecord($data);

			if ($response) {
				echo "Registro ingresado correctamente";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			} else {
				echo "Registro rechazado";
				echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
			}
		}
	}
}
