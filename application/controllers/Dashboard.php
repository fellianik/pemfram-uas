<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        if ($this->session->userdata('logged_in') != TRUE) {
            $url = base_url('index.php/login');
            redirect($url);
        }
    }

    public function admin()
    {
        if ($this->session->userdata('role') == 'Petugas') {

            $data['title'] = 'Dashboard Admin';

            // jumlah anggota
            $role = 'Anggota';
            $this->db->where('role', $role);
            $query1 = $this->db->get('table_user')->num_rows();

            // jumlah buku
            $query2 = $this->db->get('table_buku')->num_rows();

            // jumlah pinjam
            $status1 = 'pinjam';
            $this->db->where('status', $status1);
            $query3 = $this->db->get('table_transaksi')->num_rows();

            // jumlah kembali
            $status2 = 'kembali';
            $this->db->where('status', $status2);
            $query4 = $this->db->get('table_transaksi')->num_rows();

            $data['jmlh_anggota'] = $query1;
            $data['jmlh_buku'] = $query2;
            $data['jmlh_pinjam'] = $query3;
            $data['jmlh_kembali'] = $query4;
            $this->template->render('dashboard_admin', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function anggota()
    {
        if ($this->session->userdata('role') == 'Anggota') {

            $data['title'] = 'Dashboard Anggota';
            $id = $this->session->userdata['id_user'];

            $status1 = 'pinjam';
            $this->db->where('id_anggota', $id);
            $this->db->where('status', $status1);
            $query1 = $this->db->get('table_transaksi')->num_rows();

            $status2 = 'kembali';
            $this->db->where('id_anggota', $id);
            $this->db->where('status', $status2);
            $query2 = $this->db->get('table_transaksi')->num_rows();

            $data['jmlh_pinjam'] = $query1;
            $data['jmlh_kembali'] = $query2;
            $this->template->render('dashboard_anggota', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }
}
