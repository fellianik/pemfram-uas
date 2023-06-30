<?php

class Book extends CI_Controller
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
    public function index()
    {
        $data['title'] = 'Buku';
        
        // Mengambil data buku
        if ($this->session->userdata('role') == 'Petugas') {
            $data['data'] = $this->M_buku->getData();
        } else {
            $keyword = $this->input->get('keyword');
            $data['data'] = $this->M_buku->searchData($keyword);
        }

        $this->template->render('book_list', $data);
    }

    public function add()
    {
        $data['title'] = 'Buku';
        $data['editState'] = false;

        if ($this->input->post()) {
            $data = array(
                'judul_buku' => $this->input->post('judul'),
                'pengarang' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'tahun_terbit' => $this->input->post('tahun_terbit'),
                'stok_buku' => $this->input->post('stok'),
                'id_user' => $this->session->userdata['id_user'],
                'createdAt' => date('Y-m-d H:i:s'),
                'updatedAt' => date('Y-m-d H:i:s')
            );
            $this->M_buku->addData($data);
            redirect(base_url() . 'index.php/book');
        } else {
            $this->template->render('book_add', $data);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Buku';
        $data['editState'] = true;

        $data['data'] = $this->M_buku->getDataById($id);

        if ($this->input->post()) {
            $data = array(
                'judul_buku' => $this->input->post('judul'),
                'pengarang' => $this->input->post('penulis'),
                'penerbit' => $this->input->post('penerbit'),
                'tahun_terbit' => $this->input->post('tahun_terbit'),
                'stok_buku' => $this->input->post('stok'),
                'id_user' => $this->session->userdata['id_user'],
                'updatedAt' => date('Y-m-d H:i:s')
            );
            $this->M_buku->updateData($id, $data);
            redirect(base_url() . 'index.php/book');
        } else {
            $this->template->render('book_add', $data);
        }
    }

    public function delete($id)
    {
        $this->M_buku->deleteData($id);
        redirect(base_url() . 'index.php/book');
    }

    public function search()
    {
        $keyword = $this->input->get('keyword');
         $data['title'] = 'Buku';
         $data['data'] = $this->M_buku->searchData($keyword);
            $this->template->render('book_list', $data);
   
    }

    public function reset()
    {
            $data['title'] = 'Buku';
            $data['data'] = $this->M_buku->getData(); // Mendapatkan semua data buku
            $this->template->render('book_list', $data);
    }
}
