<div class="container">

        <div class="row mt-3">
                <div class="col-md-6">
                        <div class="card">
                                <div class="card-header">
                                Form Tambah Jabatan
                                </div>
                        <div class="card-body">


        <form action="<?php echo base_url('admin/Jabatan/TambahDataJabatan');?>" name="jabatan-form" id="jabatan" method="post">
                <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id">
                        <small class="form-text text-danger"><?= form_error('id')?></small>
                </div>

                <div class="form-group">
                        <label for="nama_jabatan">Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan">
                        <small class="form-text text-danger"><?= form_error('nama_jabatan')?></small>
                </div>




                <button type="submit" id="jabatan-submit" name="tambah" class="btn btn-primary">Tambah Data</button>
        </form>

        </div>
</div>
