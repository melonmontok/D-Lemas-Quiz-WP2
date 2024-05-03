<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Siswa extends CI_Model {
    
    public function getDataSiswa(){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function InsertDataSsw($data){
        $this->db->insert('tb_siswa',$data);
    }

    public function EditDataSsw($data,$id){
        $this->db->where('nis', $id);
        $this->db->update('tb_siswa',$data);
    }

    public function getDataSiswaDetail($id){
        $this->db->where('nis', $id);
        $query = $this->db->get('tb_siswa');
        return $query->row();
    }
}