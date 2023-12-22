<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_MODEL {
    
    public function login($post)
    {
        $this->db->select('user.*, userrole.* , usergroup.*');
        $this->db->from('user');
        $this->db->join('userrole','userrole.usr_id=user.usr_id');
        $this->db->join('usergroup', 'userrole.usg_id = usergroup.usg_id');
        $this->db->where('usr_name', $post['usr_name']);
        $this->db->where('usr_pass', md5($post['usr_pass']));
        $query = $this->db->get();
        return $query;
    }
    public function get($usr_id=null)
    {
        $this->db->from('user');
        if($usr_id!=null)
        {
            $this->db->where('usr_id',$usr_id);
        }
        $query=$this->db->get();
        return $query;
    }
}