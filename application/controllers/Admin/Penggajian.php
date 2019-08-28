<?php

class Penggajian extends CI_Controller{

  public function __construct(){
           parent::__construct();
           $this->load->model('Model_penggajian');
           $this->load->library('form_validation');
       }

       public function index(){
                 $ata ['judul'] = 'Penggajian';
                 $data = array(
                   'title' => 'data penggajian',
                   'data_penggajian' => $this->Model_penggajian->getAllPenggajian()
                 );
                 $this->load->view('templates_admin/header3',$ata);
                 $this->load->view('templates_admin/penggajian/index',$data);

             }



        public function TambahDataPenggajian()
        {
            $data['judul'] = 'Form Tambah Penggajian';
            $this->form_validation->set_rules('id_t','ID','required|numeric|max_length[2]|is_unique[tb_transaksi_gaji.id_t]');
            $this->form_validation->set_rules('id_karyawan','ID Karyawan','required|max_length[2]');
            $this->form_validation->set_rules('pendapatan','Pendapatan','required');
            $this->form_validation->set_rules('potongan','Potongan','required');
            $this->form_validation->set_rules('gaji_bersih','gaji Bersih','required');
            $this->form_validation->set_rules('id_user_input','ID User','required|numeric|max_length[2]');

            if($this->form_validation->run()== FALSE){

                $this->load->view('templates_admin/header3',$data);
                $this->load->view('templates_admin/penggajian/tambah');

            } else{
                $this->Model_penggajian->AddPenggajian();
                $this->session->set_flashdata('flash','berhasil ditambahkan');
                redirect('admin/penggajian/index');
            }
        }


        public function UbahDataPenggajian($id) {
        $ata['judul'] = 'Form Ubah Karyawan';
        $data['gaji'] = $this->Model_penggajian->getPenggajianById($id);
        $this->form_validation->set_rules('id_t','ID','required|numeric|max_length[2]|is_unique[tb_transaksi_gaji.id_t]');
        $this->form_validation->set_rules('id_karyawan','ID Karyawan','required|max_length[2]');
        $this->form_validation->set_rules('pendapatan','Pendapatan','required');
        $this->form_validation->set_rules('potongan','Potongan','required');
        $this->form_validation->set_rules('gaji_bersih','gaji Bersih','required');
        $this->form_validation->set_rules('id_user_input','ID User','required|numeric|max_length[2]');

        if($this->form_validation->run()== FALSE){
            $this->load->view('templates_admin/header3',$ata);
            $this->load->view('templates_admin/penggajian/ubah',$data);

      } else{
            $this->Model_penggajian->UpdatePenggajian();
            $this->session->set_flashdata('flash','berhasil diubah');
            redirect('admin/penggajian/index');
          }

      }

      public function HapusDataPenggajian($id) {
        $this->Model_penggajian->DeletePenggajian($id);
        $this->session->set_flashdata('flash','berhasil dihapus');
        redirect('admin/penggajian/index');
    }

    public function Penggajian_pdf(){
      $this->load->library('dompdf_gen');
      $data['gaji'] = $this->Model_penggajian->tampil_dataPenggajian('tb_transaksi_gaji')->result();
      $this->load->view('templates_admin/pdf/penggajian',$data);

      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);

      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("gaji.pdf", array('attachment'=>0));


    }

}
