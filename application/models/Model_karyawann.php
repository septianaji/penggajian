<?php

class Model_karyawann extends CI_Model {

  public function tampil_dataKaryawan(){
    return $this->db->get('tb_karyawan');
  }

  public function getAllKaryawann()
   {
      $query = $this->db->order_by('id_k','DESC')->get('tb_karyawan');
      return $query->result();

   }

  public function AddKaryawann()
    {

    $data = array(
        "id_k" => $_POST['id_k'],
        "id_jabatan" => $_POST['id_jabatan'],
        "nama_karyawan" => $_POST['nama_karyawan'],
        "alamat" => $_POST['alamat'],
        "tgl_lahir" => $_POST['tgl_lahir'],
        "jk" => $_POST['jk'],
        "tempat_lahir" => $_POST['tempat_lahir'],
        "pendidikan" => $_POST['pendidikan'],

    );

    $this->db->insert('tb_karyawan',$data);

    }

    public function UpdateKaryawann()
      {

      $data = array(
        "id_k" => $_POST['id_k'],
        "id_jabatan" => $_POST['id_jabatan'],
        "nama_karyawan" => $_POST['nama_karyawan'],
        "alamat" => $_POST['alamat'],
        "tgl_lahir" => $_POST['tgl_lahir'],
        "jk" => $_POST['jk'],
        "tempat_lahir" => $_POST['tempat_lahir'],
        "pendidikan" => $_POST['pendidikan'],

      );

      $this->db->where('id_k',$this->input->post('id_k'));
      $this->db->update('tb_karyawan',$data);
}

public function getKaryawannById($id_k)
    {
        return $this->db->get_where('tb_karyawan',['id_k' => $id_k])->row_array();
    }

public function DeleteKaryawan($id_k) {
  $this->db->where('id_k', $id_k);
  $this->db->delete('tb_karyawan');
}


}
