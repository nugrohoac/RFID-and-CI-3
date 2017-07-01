<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class MapresModel extends CI_Model{

    public function index(){
        //do something here
    }

    public function insert($data){
        
        return $this->db->insert('peserta',$data);
    }

    public function tampil(){
        return $this->db->get('peserta');
        //return $this->db->query('SELECT * FROM peserta');
    }

    public function hapus($id){
        return $this->db->delete('peserta',array(
            'id_pst' => $id
        ));
    }

    public function editProcess($data){
        // $hasil =  $this->db->query("SELECT * FROM peserta WHERE 'id_pst'=$id");
        //$nama_awal = $data['nama_awal'];
        // $id = $this->input->post('id');
        // $nama_awal = $this->input->post('nama_awal');
        // $nama_akhir = $this->input->post('nama_akhir');
        // $alamat = $this->input->post('alamat');
        //ini udah sukses
        //return $this->db->query("UPDATE peserta SET nama_awal='$nama_awal' WHERE id_pst='$id'");
        $this->db->where('id_pst',$data['id']);
        return $this->db->update('peserta',array(
            'nama_awal' => $data['nama_awal'],
            'nama_akhir' => $data['nama_akhir'],
            'alamat' => $data['alamat'],
            'idGelang' => $data['idGelang']
        ));
    }

    public function gelang($data){
        return $this->db->insert('gelang',$data);
    }

}
?>