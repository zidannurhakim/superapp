<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    private $module = "keuangan";
	private $page_title = "Portal Keuangan";

    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $data['view_file'] = "index";
        $data['page_title'] = $this->page_title;
        $data['module'] = $this->module;
        $this->load->view('templates/adminkeceh',$data);
    }
}
