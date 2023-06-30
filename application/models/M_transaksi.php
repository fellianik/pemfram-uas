<?php

class M_transaksi extends CI_Model
{
    public function getData()
    {
        return $this->db->get('table_transaksi')->result_array();
    }

    public function addData($data)
    {
        return $this->db->insert('table_transaksi', $data);
    }

    public function getDataById($id)
    {
        $this->db->where('id_transaksi', $id);
        $query = $this->db->get('table_transaksi');
        return $query->result_array()[0];
    }

    public function updateData($id, $request)
    {
        $this->db->where('id_transaksi', $id);
        return $this->db->update('table_transaksi', $request);
    }

    public function deleteData($id)
    {
        $this->db->where('id_transaksi', $id);
        return $this->db->delete('table_transaksi');
    }

    public function getDataByStatus($status)
    {
        $this->db->where('status', $status);
        $query = $this->db->get('table_transaksi');
        return $query->result_array();
    }

    public function getDataByAnggotaStatus($idAnggota, $status)
    {
        $this->db->where('id_anggota', $idAnggota);
        $this->db->where('status', $status);
        $query = $this->db->get('table_transaksi');
        return $query->result_array();
    }
}
