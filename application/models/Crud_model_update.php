<?php
class Crud_model_update extends CI_Model
{

	function displayFleteById($id)
	{
		$query = $this->db->where("id_flete", $id);
		$query = $this->db->get("fletes");
		return $query->result();
	}

	function actualizarFlete($data)
	{
		$this->db->set("direccion", $data['direccion']);
		$this->db->set("costo", $data['costo']);
		$this->db->set("costo_adicional", $data['costo_adicional']);
		$this->db->set("fecha_entrega", $data['fecha_entrega']);
		$this->db->set("fecha_pedido", $data['fecha_pedido']);
		$this->db->set("tipo", $data['tipo']);
		$this->db->where("id_flete", $data['id_flete']);
		$query = $this->db->update("fletes");
		return $query;
	}

	function actualizarNombreUser($data)
	{

		$this->db->set("nombre", $data['nombre']);
		$this->db->set("apellido", $data['apellido']);
		$this->db->where("id_usuario", $data['id_usuario']);
		$query = $this->db->update("usuario");
		return $query;
	}

	function actualizarContraseñaUser($data)
	{

		$this->db->set("password", $data['password']);
		$this->db->where("id_usuario", $data['id_usuario']);
		$query = $this->db->update("usuario");
		return $query;
	}
}
