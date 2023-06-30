<?php

class Transaksi extends CI_Controller
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

    public function peminjaman($status = "pinjam")
    {
        if ($this->session->userdata('role') == 'Petugas') {
            $data['title'] = "Peminjaman";
            $data['show'] = true;
            $data['data'] = $this->M_transaksi->getDataByStatus($status);
            $this->template->render('peminjaman_list', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function pengembalian($status = "kembali")
    {
        if ($this->session->userdata('role') == 'Petugas') {
            $data['title'] = "Pengembalian";
            $data['show'] = false;
            $data['data'] = $this->M_transaksi->getDataByStatus($status);
            $this->template->render('peminjaman_list', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function add()
    {
        if ($this->session->userdata('role') == 'Petugas') {
            $data['title'] = "Peminjaman";
            $data['editState'] = false;

            $data['buku'] = $this->M_buku->getData();
            $query = $this->db->query('SELECT * FROM table_user WHERE role = "Anggota"');
            $data['anggota'] = $query->result_array();

            if ($this->input->post()) {
                $tgl1    = $this->input->post('tgl_pinjam'); // menentukan tanggal awal
                $tgl2    = date('Y-m-d', strtotime('+' . $this->input->post('periode') . ' days', strtotime($tgl1))); // penjumlahan tanggal sebanyak periode hari

                $data = array(
                    'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                    'periode' => $this->input->post('periode'),
                    'tgl_kembali' => $tgl2,
                    'id_buku' => $this->input->post('id_buku'),
                    'id_anggota' => $this->input->post('id_anggota'),
                    'status' => $this->input->post('status'),
                    'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
                    'id_user' => $this->session->userdata['id_user'],
                    'createdAt' => date('Y-m-d H:i:s'),
                    'updatedAt' => date('Y-m-d H:i:s')
                );
                $this->M_transaksi->addData($data);
                redirect(base_url() . 'index.php/transaksi/peminjaman');
            } else {
                $this->template->render('peminjaman_add', $data);
            }
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function edit($id)
    {
        if ($this->session->userdata('role') == 'Petugas') {
            $data['title'] = "Pengembalian";
            $data['editState'] = true;

            $data['data'] = $this->M_transaksi->getDataById($id);
            $data['buku'] = $this->M_buku->getDataById($data['data']['id_buku']);
            $data['anggota'] = $this->M_user->getDataById($data['data']['id_anggota']);

            if ($this->input->post()) {
                $data = array(
                    'status' => $this->input->post('status'),
                    'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),
                    'id_user' => $this->session->userdata['id_user'],
                    'updatedAt' => date('Y-m-d H:i:s')
                );
                $this->M_transaksi->updateData($id, $data);
                redirect(base_url() . 'index.php/transaksi/peminjaman');
            } else {
                $this->template->render('peminjaman_add', $data);
            }
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function delete($id)
    {
        $this->M_transaksi->deleteData($id);
        redirect(base_url() . 'index.php/transaksi/peminjaman');
    }

    public function detail($id)
    {
        $data['title'] = 'transaksi';
        $data['data'] = $this->M_transaksi->getDataById($id);
        if ($data['data']['status'] == 'pinjam') {
            $data['show'] = false;
        } else {
            $data['show'] = true;
        }
        $data['buku'] = $this->M_buku->getDataById($data['data']['id_buku']);
        $data['anggota'] = $this->M_user->getDataById($data['data']['id_anggota']);
        $this->template->render('transaksi_detail', $data);
    }

    public function peminjamanAnggota()
    {
        if ($this->session->userdata('role') == 'Anggota') {
            $data['title'] = "Peminjaman";
            $data['show'] = false;
            $id = $this->session->userdata['id_user'];
            $status = 'pinjam';
            $data['data'] = $this->M_transaksi->getDataByAnggotaStatus($id, $status);
            $this->template->render('peminjaman_list', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function pengembalianAnggota()
    {
        if ($this->session->userdata('role') == 'Anggota') {
            $data['title'] = "Pengembalian";
            $data['show'] = false;
            $id = $this->session->userdata['id_user'];
            $status = 'kembali';
            $data['data'] = $this->M_transaksi->getDataByAnggotaStatus($id, $status);
            $this->template->render('peminjaman_list', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }
}
