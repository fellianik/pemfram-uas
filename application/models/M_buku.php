<?php

class M_buku extends CI_Model
{
    public function getData()
    {
        return $this->db->get('table_buku')->result_array();
    }

    public function addData($data)
    {
        return $this->db->insert('table_buku', $data);
    }

    public function getDataById($id)
    {
        $this->db->where('id_buku', $id);
        $query = $this->db->get('table_buku');
        return $query->result_array()[0];
    }

    public function updateData($id, $request)
    {
        $this->db->where('id_buku', $id);
        return $this->db->update('table_buku', $request);
    }

    public function deleteData($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->delete('table_buku');
    }

    public function searchData($keyword)
{
    if ($keyword) {
        // Menggunakan query LIKE untuk mencari buku berdasarkan judul atau pengarang
        $this->db->like('judul_buku', $keyword);
        $this->db->or_like('pengarang', $keyword);
    }

    return $this->db->get('table_buku')->result_array();
}

}
