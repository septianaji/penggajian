<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Tambah Penggajian
                                </div>
                        <div class="card-body">


        <form action="<?php echo base_url('admin/Penggajian/TambahDataPenggajian');?>" name="penggajian-form" id="penggajian" method="post">
                <div class="form-group">
                        <label for="id_t">ID</label>
                        <input type="text" name="id_t" class="form-control" id="id_t">
                        <small class="form-text text-danger"><?= form_error('id_t')?></small>
                </div>

                <div class="form-group">
                        <label for="id_karyawan">ID Karyawan</label>
                        <input type="text" name="id_karyawan" class="form-control" id="id_karyawan">
                        <small class="form-text text-danger"><?= form_error('id_karyawan')?></small>
                </div>

                <div class="form-group">
                        <label for="pendapatan">Pendapatan</label>
                        <input type="text" name="pendapatan" class="form-control" id="pendapatan" onkeyup="sum();"><td>(Dalam Rupiah)<td>
                        <small class="form-text text-danger"><?= form_error('pendapatan')?></small>
                </div>

                <div class="form-group">
                        <label for="potongan">Potongan</label>
                        <input type="text" name="potongan" class="form-control" id="potongan" onkeyup="sum();"><td>(Dalam Rupiah)<td>
                        <small class="form-text text-danger"><?= form_error('potongan')?></small>
                </div>


                <div class="form-group">
                        <label for="gaji_bersih">Gaji Bersih</label>
                        <input type="text" name="gaji_bersih" class="form-control" id="gaji_bersih"><td>(Dalam Rupiah)<td>
                        <small class="form-text text-danger"><?= form_error('gaji_bersih')?></small>
                </div>


                <div class="form-group">
                        <label for="id_user_input">ID User Input</label>
                        <input type="text" name="id_user_input" class="form-control" id="id_user_input">
                        <small class="form-text text-danger"><?= form_error('id_user_input')?></small>
                </div>





                <button type="submit" id="penggajian-submit" name="tambah" class="btn btn-primary">Tambah Data</button>
        </form>

        </div>
</div>



<script>
        function sum() {
          var txtPendapatan = document.getElementById('pendapatan').value;
          var txtPotongan = document.getElementById('potongan').value;
          var result = parseInt(txtPendapatan) - parseInt(txtPotongan);
          if(!isNaN(result)) {
            document.getElementById('gaji_bersih').value = result;
          }
        }

</script>
