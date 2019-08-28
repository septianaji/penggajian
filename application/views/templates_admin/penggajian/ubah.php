<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Ubah Penggajian Pegawai
                                </div>
                        <div class="card-body">


        <form action="" method="post">
            <input type="hidden" name = "id_t" value="<?= $gaji['id_t'];?>">




                <div class="form-group">
                        <label for="id_karyawan">ID Karyawan</label>
                        <input type="text" name="id_karyawan" class="form-control" id="id_karyawan"value="<?=$gaji['id_karyawan'];?>">
                        <small class="form-text text-danger"><?= form_error('id_karyawan')?></small>
                </div>


                <div class="form-group">
                        <label for="pendapatan">Pendapatan</label>
                        <input type="text" name="pendapatan" class="form-control" id="pendapatan" onkeyup="sum();" value="<?=$gaji['pendapatan'];?>">
                        <small class="form-text text-danger"><?= form_error('pendapatan')?></small>
                </div>

                <div class="form-group">
                        <label for="potongan">Potongan</label>
                        <input type="text" name="potongan" class="form-control" id="potongan" onkeyup="sum();" value="<?=$gaji['potongan'];?>">
                        <small class="form-text text-danger"><?= form_error('potongan')?></small>
                </div>

                <div class="form-group">
                        <label for="gaji_bersih">Gaji Bersih</label>
                        <input type="text" name="gaji_bersih" class="form-control" id="gaji_bersih" onkeyup="sum();" value="<?=$gaji['gaji_bersih'];?>">
                        <small class="form-text text-danger"><?= form_error('gaji_bersih')?></small>
                </div>



                <button type="submit" name="ubah-gaji" class="btn btn-primary">ubah Data</button>
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
