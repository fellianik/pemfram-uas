<?php

class M_login extends CI_Model
{
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function update_pass($old_password, $new_password)
    {
        $this->db->set('password', md5($new_password));
        $this->db->where('id_user', $this->session->userdata['id_user']);
        return $this->db->update('table_user');
    }
}
