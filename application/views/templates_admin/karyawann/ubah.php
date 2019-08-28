<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Ubah Karyawann
                                </div>
                        <div class="card-body">


        <form action="" method="post">
            <input type="hidden" name = "id_k" value="<?= $karyawan['id_k'];?>">

           


                <div class="form-group">
                        <label for="id_jabatan">ID Jabatan</label>
                        <input type="text" name="id_jabatan" class="form-control" id="id_jabatan"value="<?=$karyawan['id_jabatan'];?>">
                        <small class="form-text text-danger"><?= form_error('id_jabatan')?></small>
                </div>


                <div class="form-group">
                        <label for="nama_karyawan">Nama Karyawan</label>
                        <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan"value="<?=$karyawan['nama_karyawan'];?>">
                        <small class="form-text text-danger"><?= form_error('nama_karyawan')?></small>
                </div>

                <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat"value="<?=$karyawan['alamat'];?>">
                        <small class="form-text text-danger"><?= form_error('alamat')?></small>
                </div>

                <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir"value="<?=$karyawan['tgl_lahir'];?>">
                        <small class="form-text text-danger"><?= form_error('tgl_lahir')?></small>
                </div>

                <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" id="jk" name="jk">
                  <?php foreach($jk as $j) : ?>
                  <?php if( $j == $karyawan['jk']) : ?>
                  <option value="<?= $j; ?>" selected> <?= $j ?> </option>
                  <?php else : ?>
                  <option value ="<?= $j; ?>"><?=$j;?></option>
                  <?php endif?>
                  <?php endforeach; ?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('jk')?></small>
                 </div>

                <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"value="<?=$karyawan['tempat_lahir'];?>">
                        <small class="form-text text-danger"><?= form_error('tempat_lahir')?></small>
                </div>

                <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" id="pendidikan"value="<?=$karyawan['pendidikan'];?>">
                        <small class="form-text text-danger"><?= form_error('pendidikan')?></small>
                </div>


                <button type="submit" name="ubah-karyawan" class="btn btn-primary">ubah Data</button>
        </form>

        </div>
</div>
