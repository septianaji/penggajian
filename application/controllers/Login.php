<?php

Class Login extends CI_Controller {
    function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Model_login');
        $this->load->library('session');
    }

    function index() {
        $data['judul'] = 'Login';
        $this->load->view('header_login', $data);
        $this->load->view('login');
    }

    function proses_login() {
        $user= $this->input->post('username');
        $pass = $this->input->post('password');

        $ceklogin = $this->Model_login->login($user, $pass);

        if($ceklogin) {
            foreach($ceklogin as $row);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('level', $row->level);

            if ($this->session->userdata('level') == 1) {
                redirect('admin/dashboard_admin/index');


            } elseif ($this->session->userdata('level') == 2) {
                redirect('pegawai/dashboard_pegawai/index');
            }

            } else{
              $this->session->set_flashdata('status', 'failed');
              redirect(base_url());

            }
        }

        public function logout(){
		        $this->session->sess_destroy();
		        redirect(base_url());
	}





}
