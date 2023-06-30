<?php
class Login extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Log in";
        $this->load->view("login", $data);
    }

    function auth()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password),
        );

        $cek = $this->M_login->cek_login("table_user", $where)->num_rows();
        $query = $this->M_login->cek_login("table_user", $where)->row();

        if ($cek > 0) {
            $data_session = array(
                'id_user' => $query->id_user,
                'email' => $email,
                'nama' => $query->nama,
                'role' => $query->role,
                'status' => "login",
                'logged_in' => true
            );

            $this->session->set_userdata($data_session);

            if ($query->role == 'Petugas') {
                redirect(base_url() . 'index.php/dashboard/admin');
            } else {
                redirect(base_url() . 'index.php/dashboard/anggota');
            }
        } else {
            $this->session->set_flashdata("message", "Failed, wrong email or password.");
            redirect(base_url() . 'index.php/login');
            $this->session->sess_destroy();
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php/login');
    }
}
