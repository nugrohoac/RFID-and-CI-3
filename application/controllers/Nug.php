<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nug extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('mpertama');		
    }

	public function index()	{
		$data['semuadata'] = $this->mpertama->ambildata();
		$data['judul'] = "ini Judul";
		$data['head'] = "ini Head";
		$this->load->view('testView',$data);

		//echo base_url();
		//$this->load->view('crud/index');
	}

	public function nugi() {
		$this->load->view('crud/index');
	}

	public function tambah() {
		$this->load->view('crud/tambah');
	}

	//kasih nillai $params1=null atau $params1='' untuk membuat nilai defaultnya
	public function params($params1='cahyono',$params2='nugroho') {
		echo "ini adalah params pertama : ".$params1." dan params dua : ".$params2;
	}

	public function tryView(){
		$data['depan']="nugroho";
		$data['tengah']="agung";
		$data['belakang']="cahyono";
		$this->load->view('testView',$data);
	}

	public function beta(){
		$data['depan']="beta";
		$data['tengah']="wulandari";
		$data['belakang']="cahyono";
		$this->load->view('testView',$data);
	}

}

?>
