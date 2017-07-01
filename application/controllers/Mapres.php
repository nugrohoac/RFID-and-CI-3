<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapres extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->model('MapresModel');		
    }

	public function index()	{
        //result_object; sebagai object
        $data['all'] = $this->MapresModel->tampil()->result_array();
        $data['usa'] = "use";
        // print_r($data);
        $this->load->view('crud/index',$data);
	}

	public function tambah() {
        // if($this->input->post('tambah')){
            
            $this->form_validation->set_rules('nama_awal','masukkan nama awal anda','required');
            $this->form_validation->set_rules('nama_akhir','masukkan nama akhir','required');
            $this->form_validation->set_rules('alamat','masukkan alamat','required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('crud/tambah');
            }else{
                
                $nama_awal = $this->input->post('nama_awal');
                $nama_akhir = $this->input->post('nama_akhir');
                $alamat = $this->input->post('alamat');
                $idGelang = $this->input->post('idGelang');
            
                $data = array(
                    'nama_awal' => $nama_awal,
                    'nama_akhir' => $nama_akhir,
                    'alamat' => $alamat,
                    'idGelang' => $idGelang
                );

                $masuk = $this->MapresModel->insert($data);

                if($masuk){
                    //$this->session->set_flashdata('nama','nugrohoac');
                    redirect('mapres');
                }
            }         
        // }else{
        //     $this->load->view('crud/tambah');
        // }   
	}

    public function insert(){

        if($this->input->post('tambah')){
            echo "wowoowo";
        }

        // $this->form_validation->set_rules('nama_awal','masukkan nama awal anda','required');
        // $this->form_validation->set_rules('nama_akhir','masukkan nama akhir','required');
        // $this->form_validation->set_rules('alamat','masukkan alamat','required');

        // if($this->form_validation->run() == FALSE){
        //     $this->load->view('crud/tambah');
        // }else{
        //     $nama_awal = $this->input->post('nama_awal');
        //     $nama_akhir = $this->input->post('nama_akhir');
        //     $alamat = $this->input->post('alamat');
        
        //     $data = array(
        //         'nama_awal' => $nama_awal,
        //         'nama_akhir' => $nama_akhir,
        //         'alamat' => $alamat
        //     );

        //     $this->db->insert('peserta',$data);

        // }
    }

    public function edit(){
        $id = $this->input->post('id');
        $hasil['hasil'] =  $this->db->query("SELECT * FROM peserta WHERE id_pst='$id'")->result_array();
        //$hasil['hasil'] = $this->db->get_where('peserta',array('id_pst' => $id))->result_array();
        //echo $this->db->affected_rows();
        //print_r($hasil['data']);
        //echo $hasil['data'][0]['alamat'];
        $parse = array(
            'id' => $id,
            'nama_awal' => $hasil['hasil'][0]['nama_awal'],
            'nama_akhir' => $hasil['hasil'][0]['nama_akhir'],
            'alamat'=> $hasil['hasil'][0]['alamat'],
            'idGelang'=> $hasil['hasil'][0]['idGelang']
        );
        $this->load->view('crud/ubah',$parse);
    }

    public function editProcess(){
        $id = $this->input->post('id');
        $nama_awal = $this->input->post('nama_awal');
        $nama_akhir = $this->input->post('nama_akhir');
        $alamat = $this->input->post('alamat');
        $idGelang = $this->input->post('idGelang');
    
        $data = array(
            'id' =>$id,
            'nama_awal' => $nama_awal,
            'nama_akhir' => $nama_akhir,
            'alamat' => $alamat,
            'idGelang' => $idGelang
        );

        $update = $this->MapresModel->editProcess($data);

        if($update){
            redirect ('Mapres');
        }

    }

    public function hapus(){
        // $this->db->affected_rows() == mysqli_num_rows;
        $id = $this->input->post('id');
        $hapus = $this->MapresModel->hapus($id);
        if($hapus){
            redirect('mapres');
        }
    }

    public function search(){
        $this->load->view('crud/search');
    }

    public function searchProcess(){
        $a = $this->input->post('s');

        $cari = $this->db->query("SELECT * FROM peserta WHERE idGelang='$a'")->result_array();
        echo $cari[0]['nama_awal']." ".$cari[0]['nama_akhir']." ".$cari[0]['alamat']." ".$cari[0]['idGelang'];
        // $b = "nugroho";

        // $s = array(
        //     'nama' => $b,
        //     'chip' => $a
        // );
      

        // $input = $this->MapresModel->gelang($s);
        // if($input){
        //     echo "Sukses";
        // }
    }

}
