<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Ubah Jabatan
                                </div>
                        <div class="card-body">


        <form action="" method="post">
            <input type="hidden" name = "id" value="<?= $jabatan['id'];?>">


                <div class="form-group">
                        <label for="nama_jabatan">Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan"value="<?=$jabatan['nama_jabatan'];?>">
                        <small class="form-text text-danger"><?= form_error('nama_jabatan')?></small>
                </div>

                <button type="submit" name="ubah" class="btn btn-primary">ubah Data</button>
        </form>

        </div>
</div>
