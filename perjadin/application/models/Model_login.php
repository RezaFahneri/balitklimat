<?php
class Model_login extends CI_model
{
    public function bisalogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->where('email', $email)->where('password',($password))->where('role','Admin Perjalanan Dinas')->get('detail_role');
        if ($query->num_rows() > 0) {
            $data = array(
                'email'    => $query->row()->email,
                'password'    => $query->row()->password,
                'logged_in'    => true,
                'role'        => $query->row()->role
            );

            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }
}