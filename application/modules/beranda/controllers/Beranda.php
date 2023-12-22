<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    private $module = "beranda";
	private $page_title = "Beranda";

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['view_file'] = "index";
        $data['page_title'] = $this->page_title;
        $data['module'] = $this->module;
        $this->load->view('templates/adminkeceh',$data);
    }
}
