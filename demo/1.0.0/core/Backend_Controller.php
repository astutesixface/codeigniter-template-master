<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Backend_Controller extends MY_Controller
{
    function __construct ()
    {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('session');
        if (!(int) $this->session->userdata('user_id') > 0) {
            uri_string() == 'admin/login' || redirect('admin/login', 'refresh');
        }
    }
}