<?php

Class Dashboard_admin extends CI_Controller {
    function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Model_login');
        $this->load->library('session');

    }


    function index() {
        $data['judul'] = 'Dashboard Admin';
        $this->load->view('templates_admin/header3',$data);
        $this->load->view('admin_dashboard');
    }

  

}
