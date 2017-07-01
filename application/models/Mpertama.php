<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpertama extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function index(){

    }

    public function ambildata(){
        $data = array(
                    'artikel1' => array(
                        'judul' => 'nugroho1',
                        'head'=> 'cahyono1',
                        'isi' => 'agung1'
                    ),
                    'artikel2' => array(
                        'judul' => 'nugroho2',
                        'head'=> 'cahyono2',
                        'isi' => 'agung2'
                    ),
                    'artikel3' => array(
                        'judul' => 'nugroho3',
                        'head'=> 'cahyono3',
                        'isi' => 'agung3'
                    ),
                );
        // $data = array(
        //             'satu' => array(
        //                 'test' => 'bismillah'
        //             ),
        //             'dua' => array(
        //                 'test' => 'alhamdulillah'
        //             )
        //         );
       return $data; 
    }

}

?>