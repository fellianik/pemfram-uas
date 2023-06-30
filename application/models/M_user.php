<?php
class M_user extends CI_Model
{
    public function getData()
    {
        return $this->db->get('table_user')->result_array();
    }

    public function addData($data)
    {
        return $this->db->insert('table_user', $data);
    }

    public function getDataById($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('table_user');
        return $query->result_array()[0];
    }

    public function updateData($id, $request)
    {
        $this->db->where('id_user', $id);
        return $this->db->update('table_user', $request);
    }

    public function deleteData($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->delete('table_user');
    }
}
