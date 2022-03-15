<?php
class Crud_model_delete extends CI_Model
{
    function deleteRecord($id)
    {
        $this->db->where("id_flete", $id);
        $this->db->delete("fletes");
        return true;
    }
}
