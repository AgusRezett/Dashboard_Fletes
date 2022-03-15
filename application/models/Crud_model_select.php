<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Crud_model_select extends CI_Model
{
	public function showFletes()
	{
		$result['data'] = $this->Crud_model_select->displayFletes();
		$this->load->view('index', $result);
	}

	function displayFletes()
	{
		$query = $this->db->get("fletes");
		return $query->result();
	}

	function selectUser($data)
	{
		$query = $this->db->where('correo', $data['correo']);
		$query = $this->db->where('password', $data['password']);
		$query = $this->db->get("usuario");
		return $query->result();
	}
	//Funcion para registrar un usuario
	function saveUser($data)
	{
		$this->db->insert('usuario', $data);
		return true;
	}
	//Funcion para registrar un nuevo flete
	function saveRecord($data)
	{
		$this->db->insert('fletes', $data);
		return true;
	}
}
