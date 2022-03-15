<?php
class Crud_delete extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Crud_model_delete');
  }

  public function eliminarRegistro()
  {
    $id = $this->input->get('id');
    $response = $this->Crud_model_delete->deleteRecord($id);
    if ($response == true) {
      echo "Data deleted successfully!";
      echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
    } else {
      echo "Error !";
      echo '<a style="display: block"href="' . base_url() . 'index.php/inicio">Volver</a>';
    }
  }
}
