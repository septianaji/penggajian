<?php

class Model_penggajian extends CI_Model {

  public function tampil_dataPenggajian(){
    return $this->db->get('tb_transaksi_gaji');
  }

  public function getAllpenggajian()
   {
      $query = $this->db->order_by('id_t','DESC')->get('tb_transaksi_gaji');
      return $query->result();


   }

  public function AddPenggajian()
    {
    $data = array(
        "id_t" => $_POST['id_t'],
        "id_karyawan" => $_POST['id_karyawan'],
        "pendapatan" => $_POST['pendapatan'],
        "potongan" => $_POST['potongan'],
        "gaji_bersih" => $_POST['gaji_bersih'],
        "id_user_input" => $_POST['id_user_input'],
    );

    $this->db->insert('tb_transaksi_gaji',$data);

    }

    public function UpdatePenggajian()
    {
      $data = array(
          "id_t" => $_POST['id_t'],
          "id_karyawan" => $_POST['id_karyawan'],
          "pendapatan" => $_POST['pendapatan'],
          "potongan" => $_POST['potongan'],
          "gaji_bersih" => $_POST['gaji_bersih'],
          "id_user_input" => $_POST['id_user_input'],
      );
        $this->db->where('id_t',$this->input->post('id_t'));
        $this->db->update('tb_transaksi_gaji',$data);

    }

public function getPenggajianById($id)
    {
        return $this->db->get_where('tb_transaksi_gaji',['id_t' => $id])->row_array();

    }

public function DeletePenggajian($id) {
  $this->db->where('id_t', $id);
  $this->db->delete('tb_transaksi_gaji');
}

}
