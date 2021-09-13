<?php

class Mahasiswa_model extends CI_Model {


    public function getAllMahasiswa(){
        // bisa pakai di bawah ini 
        $this->db->order_by('id', 'DESC');
        return $this->db->get('mahasiswa')->result_array();
        // atau juga bisa buat seperti ini
        // $query = $this->db->get('mahasiswa');
        // return $query->result_array();
    }
    
    public function tambahDataMahasiswa(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)

        ];
        
        $this->db->insert('mahasiswa',$data);
    }
    
    public function ubahDataMahasiswa(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "nrp" => $this->input->post('nrp',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true)

        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('mahasiswa',$data);
    }

    public function hapusDataMahasiswa($id){
        // bisa seperti ini
        // $this->db->where('id',$id);
        // $this->db->delete('mahasiswa');
        // atau seperti
        $this->db->delete('mahasiswa',['id' => $id]);
        
    }

    public function getMahasiswaById($id){
        return $this->db->get_where('mahasiswa',['id' => $id])->row_array();
    }
    
    public function cariDataMahasiswa(){
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan',$keyword);
        $this->db->or_like('nrp',$keyword);
        $this->db->or_like('email',$keyword);
        return $this->db->get('mahasiswa')->result_array();
        
    }
}

?> 