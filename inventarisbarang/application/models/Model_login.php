<?php
class Model_login extends CI_model
{

    public function bisalogin($email, $password)
    {
        // $this->db->where('email', $email);
        // $this->db->where('password', $password);
        // $query = $this->db->where('email', $email)->where('password',md5($password))->get('login');
        // // $query = $this->db->get('tbl_login');
        // //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
        // //     if ($query->num_rows() > 0) {
        // //         return true;
        // //     } else {
        // //         return false;
        // //     }
        // if ($query->num_rows() > 0) {
        //     $data = array(
        //         'email'    => $query->row()->email,
        //         'password'    => $query->row()->password,
        //         'logged_in'    => true,
        //         'role'        => $query->row()->role
        //     );

        //     $this->session->set_userdata($data);
        //     return true;
        // } else {
        //     return false;
        // }

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->where('email', $email)->where('password',$password)->get('data_pegawai');
        if ($query->num_rows() > 0) {
            $data = array(
                'email'    => $query->row()->email,
                'password'    => $query->row()->password,
                'logged_in'    => true,
                'id_jabatan' => $query->row()->id_jabatan,
                'role' => $query->row()->role
            );

            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }
}
