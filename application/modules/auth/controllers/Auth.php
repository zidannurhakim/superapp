<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MX_Controller
{
    private $module = "Auth";
	private $page_title = "Authentication";
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
    }

    function index()
    {
        if(isset($this->session->usr_id)) redirect('beranda');
        else
        {   
            $data['view_file'] = "index";
            $data['page_title'] = $this->page_title;
            $data['module'] = $this->module;
            $this->load->view('templates/login',$data);
        }
    }
    function login()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) 
        {
            $this->load->model('m_auth');
            $query = $this->m_auth->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                if ($row->usr_active === 'Y') {
                    $params = array(
                        'usr_id' => $row->usr_id,
                        'usr_name' => $row->usr_name,
                        'usg_name'=> $row->usg_name,
                        'usr_full'=> $row->usr_full,
                        'usr_kelamin'=> $row->usr_kelamin,
                        'usg_id'=> $row->usg_id,
                    );
                    $this->session->set_userdata($params);
                    // $this->set_privmod();
                    // print_r($row);
                    redirect('beranda');
                } else {
                    echo "<script>
                        alert('Akun Anda tidak aktif. Silakan hubungi administrator.');
                        window.location='" . site_url('auth') . "';
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Login gagal');
                    window.location='" . site_url('auth') . "';
                </script>";
            }
        }
    }
    
    function logout() {
		$this->session->sess_destroy();
		redirect('auth');
	}
}
