<?php
class Model_login extends CI_model
{

    public function bisalogin($email, $password)
    {
        $query = $this->db->where('email', $email)->where('password', md5($password))->where('role', 'User')->get('detail_role');
        if ($query->num_rows() > 0) {
            $data = array(
                'email'    => $query->row()->email,
                'password'    => $query->row()->password,
                'logged_in'    => true,
                'role'        => $query->row()->role,
                'nip'        => $query->row()->nip
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

    public function bisaloginadmin($email, $password)
    {
        $query = $this->db->where('email', $email)->where('password', md5($password))->where('role', 'Admin ASN')->get('detail_role');
        if ($query->num_rows() > 0) {
            $data = array(
                'email'    => $query->row()->email,
                'password'    => $query->row()->password,
                'logged_in'    => true,
                'role'        => $query->row()->role,
                'nip'        => $query->row()->nip
            );

            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }

    public function user($email)
    {
        $query = $this->db->get_where('detail_role', ['email' => $email])->row_array();
        return $query;
    }
}
