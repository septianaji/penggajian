<?php

class Model_jabatan extends CI_Model {

  public function tampil_data(){
    return $this->db->get('tb_jabatan');
  }

  public function getAllJabatan()
   {
      $query = $this->db->order_by('id','DESC')->get('tb_jabatan');
      return $query->result();

   }

  public function AddJabatan()
    {

    $data = array(
        "id" => $_POST['id'],
        "nama_jabatan" => $_POST['nama_jabatan'],

    );

    $this->db->insert('tb_jabatan',$data);

    }

    public function UpdateJabatan()
      {

      $data = array(
          "id" => $_POST['id'],
          "nama_jabatan" => $_POST['nama_jabatan'],

      );

      $this->db->where('id',$this->input->post('id'));
      $this->db->update('tb_jabatan',$data);
}

public function getJabatanById($id)
    {
        return $this->db->get_where('tb_jabatan',['id' => $id])->row_array();
    }

public function DeleteJabatan($id) {
    $this->db->where('id', $id);
    $this->db->delete('tb_jabatan');
}


}
