<?php

class Jabatan extends CI_Controller{

  public function __construct(){
           parent::__construct();
           $this->load->model('Model_jabatan');
           $this->load->library('form_validation');
       }


  public function index(){
            $ata ['judul'] = 'Jabatan';
            $data = array(
              'title' => 'data jabatan',
              'data_jabatan' => $this->Model_jabatan->getAllJabatan()
            );
            $this->load->view('templates_admin/header3',$ata);
            $this->load->view('templates_admin/Jabatan/index',$data);

        }


        public function TambahDataJabatan()
        {
            $data['judul'] = 'Form Tambah Jabatan';
            $this->form_validation->set_rules('id','ID','required|numeric|max_length[2]|is_unique[tb_jabatan.id]');
            $this->form_validation->set_rules('nama_jabatan','Jabatan','required');

            if($this->form_validation->run()== FALSE){

                $this->load->view('templates_admin/header3',$data);
                $this->load->view('templates_admin/Jabatan/tambah');
            } else{
                $this->Model_jabatan->AddJabatan();
                $this->session->set_flashdata('flash','berhasil ditambahkan');
                redirect('admin/Jabatan/index');
            }
        }

        public function UbahDataJabatan($id)
        {
            $ata['judul'] = 'Form Ubah Jabatan';
            $data['jabatan'] = $this->Model_jabatan->getJabatanById($id);
            $this->form_validation->set_rules('nama_jabatan','Jabatan','required');

            if($this->form_validation->run()== FALSE){

                $this->load->view('templates_admin/header3',$ata);
                $this->load->view('templates_admin/Jabatan/ubah',$data);
            } else{
                $this->Model_jabatan->UpdateJabatan();
                $this->session->set_flashdata('flash','berhasil diubah');
                redirect('admin/Jabatan/index');
            }
        }

        public function HapusDataJabatan($id) {
            $this->Model_jabatan->DeleteJabatan($id);
            $this->session->set_flashdata('flash','berhasil dihapus');
            redirect('admin/Jabatan/index');
        }

        public function Jabatan_pdf(){
          $this->load->library('dompdf_gen');
          $data['jabatan'] = $this->Model_jabatan->tampil_data('tb_jabatan')->result();
          $this->load->view('templates_admin/pdf/jabatan',$data);

          $paper_size = 'A4';
          $orientation = 'landscape';
          $html = $this->output->get_output();
          $this->dompdf->set_paper($paper_size, $orientation);

          $this->dompdf->load_html($html);
          $this->dompdf->render();
          $this->dompdf->stream("jabatan.pdf", array('attachment'=>0));


        }


  }
