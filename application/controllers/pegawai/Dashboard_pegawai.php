<?php

Class Dashboard_pegawai extends CI_Controller {
    function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Model_login');
        $this->load->library('session');

    }


    function index() {
        $this->load->view('pegawai_dashboard');
    }

}