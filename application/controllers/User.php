<?php
class User extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     //validasi jika user belum login
    //     if ($this->session->userdata('logged_in') != TRUE) {
    //         $url = base_url('index.php/login');
    //         redirect($url);
    //     }
    // }

    public function index()
    {
        if ($this->session->userdata('role') == 'Petugas') {
            $data['title'] = "User";
            $data['data'] = $this->M_user->getData();

            $this->template->render('user_list', $data);
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function add()
    {
        // if ($this->session->userdata('role') == 'Petugas') {
        $data['title'] = "User";
        $data['editState'] = false;

        if ($this->input->post()) {
            $pass = $this->input->post('password');
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => md5($pass),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'gender' => $this->input->post('gender'),
                'role' => $this->input->post('role'),
                'createdAt' => date('Y-m-d H:i:s'),
                'updatedAt' => date('Y-m-d H:i:s')
            );
            $this->M_user->addData($data);
            redirect(base_url() . 'index.php/user');
        } else {
            $this->template->render('user_add', $data);
        }
        // } else {
        //     $url = base_url('index.php/login');
        //     $this->session->sess_destroy();
        //     redirect($url);
        // }
    }

    public function edit($id)
    {
        if ($this->session->userdata('role') == 'Petugas') {
            $data['title'] = "User";
            $data['editState'] = true;

            $data['data'] = $this->M_user->getDataById($id);

            if ($this->input->post()) {
                $pass = $this->input->post('password');
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'password' => md5($pass),
                    'alamat' => $this->input->post('alamat'),
                    'no_telp' => $this->input->post('no_telp'),
                    'gender' => $this->input->post('gender'),
                    'role' => $this->input->post('role'),
                    'createdAt' => date('Y-m-d H:i:s'),
                    'updatedAt' => date('Y-m-d H:i:s')
                );
                $this->M_user->updateData($id, $data);
                redirect(base_url() . 'index.php/user');
            } else {
                $this->template->render('user_add', $data);
            }
        } else {
            $url = base_url('index.php/login');
            $this->session->sess_destroy();
            redirect($url);
        }
    }

    public function delete($id)
    {
        $this->M_user->deleteData($id);
        redirect(base_url() . 'index.php/user');
    }
}
