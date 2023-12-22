<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MX_Controller
{
    private $module = "Auth";
	private $page_title = "Authentication";
    
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['view_file'] = "index";
        $data['page_title'] = $this->page_title;
        $data['module'] = $this->module;
        $this->load->view('templates/login',$data);
    }
}
