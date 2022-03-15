
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function index()
	{
		$this->load->model('Crud_model_select');
		$data["displayFletes"] = $this -> Crud_model_select -> displayFletes();
		$this -> load -> view('index', $data);
	}
}
