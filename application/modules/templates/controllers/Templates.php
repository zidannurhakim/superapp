<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends CI_Controller {

    function __construct() {
		parent::__construct();
	}

    function adminkeceh($data) 
    {
        // $data['cekkewenangan']=$this->m_templates->cekakun();
        // $data['cekaktif']=$this->m_templates->cekaktif();
        // print_r($data['cekaktif']);
        $this->load->view('adminkeceh', $data);
    }

    function w3report($data) {
        $this->load->view('w3report', $data);
    }

    function login($data)
    {
        $this->load->view('login', $data);
    }
    
}
