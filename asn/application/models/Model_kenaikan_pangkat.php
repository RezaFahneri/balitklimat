<?php
class Model_kenaikan_pangkat extends CI_model
{
    function tampil_data($table)
    {
        return $this->db->get($table);
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function getList()
    {
        $this->db->select(
            'data_jadwal_naik_pangkat.*,data_pegawai.*,data_golongan.*,data_pangkat.*,gol.golongan as nama_golongan,pag.pangkat as nama_pangkat'
        );
        $this->db->from('data_jadwal_naik_pangkat');
        $this->db->join(
            'data_pegawai',
            'data_jadwal_naik_pangkat.nip= data_pegawai.nip'
        );
        $this->db->join(
            'data_golongan',
            'data_pegawai.id_golongan= data_golongan.id_golongan'
        );
        $this->db->join(
            'data_pangkat',
            'data_pegawai.id_pangkat= data_pangkat.id_pangkat'
        );

        $this->db->join(
            'data_golongan as gol',
            'data_jadwal_naik_pangkat.id_golongan_berikutnya= gol.id_golongan'
        );
        $this->db->join(
            'data_pangkat as pag',
            'data_jadwal_naik_pangkat.id_pangkat_berikutnya= pag.id_pangkat'
        );

        return $this->db->get()->result();
    }
    function getList2($kode_kp)
    {
        $this->db->select(
            'data_jadwal_naik_pangkat.*,data_pegawai.*,data_golongan.*,data_pangkat.*,gol.golongan as nama_golongan,pag.pangkat as nama_pangkat'
        );
        $this->db->from('data_jadwal_naik_pangkat');
        $this->db->join(
            'data_pegawai',
            'data_jadwal_naik_pangkat.nip= data_pegawai.nip'
        );
        $this->db->join(
            'data_golongan',
            'data_pegawai.id_golongan= data_golongan.id_golongan'
        );
        $this->db->join(
            'data_pangkat',
            'data_pegawai.id_pangkat= data_pangkat.id_pangkat'
        );

        $this->db->join(
            'data_golongan as gol',
            'data_jadwal_naik_pangkat.id_golongan_berikutnya= gol.id_golongan'
        );
        $this->db->join(
            'data_pangkat as pag',
            'data_jadwal_naik_pangkat.id_pangkat_berikutnya= pag.id_pangkat'
        );
        return $this->db
            ->where('kode_kp', $kode_kp)
            ->get()
            ->result();
    }

    function get_kode_kp()
    {
        $q = $this->db->query(
            'SELECT MAX(RIGHT(kode_kp,3)) AS kd_max FROM data_jadwal_naik_pangkat WHERE DATE(tgl_penjadwalan)=CURDATE()'
        );
        $kd = '';
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf('%03s', $tmp);
            }
        } else {
            $kd = '001';
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . $kd;
    }
    function detail_jadwalkp($kode_kp)
    {
        $this->db->select(
            'data_jadwal_naik_pangkat.*,data_pegawai.*,data_golongan.*,data_pangkat.*,gol.golongan as nama_golongan,pag.pangkat as nama_pangkat'
        );
        $this->db->from('data_jadwal_naik_pangkat');
        $this->db->join(
            'data_pegawai',
            'data_jadwal_naik_pangkat.nip= data_pegawai.nip'
        );
        $this->db->join(
            'data_golongan',
            'data_pegawai.id_golongan= data_golongan.id_golongan'
        );
        $this->db->join(
            'data_pangkat',
            'data_pegawai.id_pangkat= data_pangkat.id_pangkat'
        );

        $this->db->join(
            'data_golongan as gol',
            'data_jadwal_naik_pangkat.id_golongan_berikutnya= gol.id_golongan'
        );
        $this->db->join(
            'data_pangkat as pag',
            'data_jadwal_naik_pangkat.id_pangkat_berikutnya= pag.id_pangkat'
        );
        return $this->db
            ->where('kode_kp', $kode_kp)
            ->get()
            ->row();
    }

    public function getDetail1($email)
    {
        $this->db->select(
            'data_jadwal_naik_pangkat.*,data_pegawai.*,data_golongan.*,data_pangkat.*,gol.golongan as nama_golongan,pag.pangkat as nama_pangkat'
        );
        $this->db->from('data_jadwal_naik_pangkat');
        $this->db->join(
            'data_pegawai',
            'data_jadwal_naik_pangkat.nip= data_pegawai.nip'
        );
        $this->db->join(
            'data_golongan',
            'data_pegawai.id_golongan= data_golongan.id_golongan'
        );
        $this->db->join(
            'data_pangkat',
            'data_pegawai.id_pangkat= data_pangkat.id_pangkat'
        );

        $this->db->join(
            'data_golongan as gol',
            'data_jadwal_naik_pangkat.id_golongan_berikutnya= gol.id_golongan'
        );
        $this->db->join(
            'data_pangkat as pag',
            'data_jadwal_naik_pangkat.id_pangkat_berikutnya= pag.id_pangkat'
        );
        return $this->db
            ->where('email', $email)
            ->get()
            ->row_array();
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function NIPCheck($nip)
    {
        $datanip = $this->db->where('nip', $nip)->get('data_jadwal_naik_pangkat');
        if ($datanip->num_rows() == 0) {
            return true;
        } else {
            return false;
        }
    }
    // function fetch_all_event(){
    //     $this->db->order_by('kode_kp');
    // $tampil = $this->db->query("SELECT * FROM data_jadwal_naik_pangkat order by kode_kp") ;
    // $dataArr = array();
    // while($data = mysqli_fetch_array($tampil)){
    //     $dataArr[] = array(
    //         'title' => $data['nip'],
    //         'start' => $data['jadwal_kp'],
    //     );
    // }
    // echo json_encode($dataArr);
    //return $this->db->get('data_jadwal_naik_pangkat');
    //}
}
