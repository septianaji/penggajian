<?php

class Karyawann extends CI_Controller{

  public function __construct(){
           parent::__construct();
           $this->load->model('Model_karyawann');
           $this->load->library('form_validation');
       }


  public function index(){
            $ata ['judul'] = 'Karyawan';
            $data = array(
              'title' => 'data Karyawan',
              'data_karyawann' => $this->Model_karyawann->getAllKaryawann()
            );
            $this->load->view('templates_admin/header3',$ata);
            $this->load->view('templates_admin/karyawann/index',$data);

        }


        public function TambahDataKaryawann()
        {
            $data['judul'] = 'Form Tambah Karyawan';
            $this->form_validation->set_rules('id_k','ID','required|numeric|max_length[2]|is_unique[tb_karyawan.id_k]');
            $this->form_validation->set_rules('id_jabatan','ID Jabatan','required|max_length[2]');
            $this->form_validation->set_rules('nama_karyawan','Karyawan','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
            $this->form_validation->set_rules('jk','Jenis Kelamin','required');
            $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
            $this->form_validation->set_rules('pendidikan','pendidikan','required');

            if($this->form_validation->run()== FALSE){

                $this->load->view('templates_admin/header3',$data);
                $this->load->view('templates_admin/karyawann/tambah');
            } else{
                $this->Model_karyawann->AddKaryawann();
                $this->session->set_flashdata('flash','berhasil ditambahkan');
                redirect('admin/Karyawann/index');
            }
        }

        public function UbahDataKaryawann($id_k)
        {
            $ata['judul'] = 'Form Ubah Karyawan';
            $data['karyawan'] = $this->Model_karyawann->getKaryawannById($id_k);
            $data['jk']= ['L', 'P'];
            $this->form_validation->set_rules('id_jabatan','ID Jabatan','required|max_length[2]');
            $this->form_validation->set_rules('nama_karyawan','Karyawan','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
            $this->form_validation->set_rules('jk','Jenis Kelamin','required');
            $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
            $this->form_validation->set_rules('pendidikan','pendidikan','required');

            if($this->form_validation->run()== FALSE){
                $this->load->view('templates_admin/header3',$ata);
                $this->load->view('templates_admin/Karyawann/ubah',$data);
            } else{
                $this->Model_karyawann->UpdateKaryawann();
                $this->session->set_flashdata('flash','berhasil diubah');
                redirect('admin/karyawann/index');
            }
        }


        public function HapusDataKaryawann($id_k) {
            $this->Model_karyawann->DeleteKaryawan($id_k);
            $this->session->set_flashdata('flash','berhasil dihapus');
            redirect('admin/karyawann/index');
        }


        public function Karyawan_pdf(){
          $this->load->library('dompdf_gen');
          $data['karyawan'] = $this->Model_karyawann->tampil_dataKaryawan('tb_karyawan')->result();
          $this->load->view('templates_admin/pdf/karyawan',$data);

          $paper_size = 'A4';
          $orientation = 'landscape';
          $html = $this->output->get_output();
          $this->dompdf->set_paper($paper_size, $orientation);

          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("karyawan.pdf", array('attachment'=>0));


        }



  }
