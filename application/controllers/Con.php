<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('mpertama');		
    }

	public function index()	{
		$this->load->view('crud/tambah');

		//echo base_url();

	}
}

?>