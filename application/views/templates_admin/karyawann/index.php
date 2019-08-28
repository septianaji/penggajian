<div class="container" style="margin-top: 20px">

<?php if($this->session->flashdata('flash') ) : ?>

                  <div class="row-mt-3">
                  <div class="col-md-6">

                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                         Data Jabatan <strong></strong>  <?= $this->session->flashdata('flash');?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                   </div>

                  </div>
                  </div>
<?php endif; ?>

	<div class="col-md-12">
		<h2 style="text-align: center;margin-bottom: 30px"> Data Karyawan PT.Sinar Rezeki Ananta</h2>
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th> ID</th>
					<th> ID Jabatan</th>
					<th> Nama Karyawan </th>
					<th> Alamat</th>
					<th> Tanggal Lahir</th>
					<th> Jenis Kelamin</th>
					<th> Tempat Lahir</th>
					<th> Pendidikan</th>


					<th style="width: 125px;"> Action</p> </th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data_karyawann as $kry) {
				?>
				<tr>
					<td><?php echo $kry->id_k; ?></td>
					<td><?php echo $kry->id_jabatan; ?></td>
					<td><?php echo $kry->nama_karyawan; ?></td>
					<td><?php echo $kry->alamat; ?></td>
					<td><?php echo $kry->tgl_lahir; ?></td>
					<td><?php echo $kry->jk; ?></td>
					<td><?php echo $kry->tempat_lahir; ?></td>
					<td><?php echo $kry->pendidikan; ?></td>

					<td style="text-align: center;">
					<a href="<?php echo site_url('admin/karyawann/UbahDatakaryawann/'.$kry->id_k); ?>" title="Edit Data"><span  class= "btn btn-primary float-right mt-3 ">Ubah</span></a>
					<a href="<?php echo site_url('admin/karyawann/HapusDatakaryawann/'.$kry->id_k); ?>" title="Hapus Data"><span  class= "btn btn-danger float-right mt-3 ">Ubah</span></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
      <a href ="<?= base_url();?>admin/karyawann/TambahDataKaryawann" class= "btn btn-success float-right mt-3 ">Tambah Data Jabatan</a>
        <a href ="<?= base_url();?>admin/karyawann/karyawan_pdf" class= "btn btn-success float-left mt-3 ">Export PDF</a>
	</div>
</div>






<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
