<div class="container" style="margin-top: 20px">

<?php if($this->session->flashdata('flash') ) : ?>

                  <div class="row-mt-3">
                  <div class="col-md-6">

                                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                         Data Penggajian <strong></strong>  <?= $this->session->flashdata('flash');?>
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
					<th> ID Karyawan</th>
					<th> Pendapatan (IDR) </th>
					<th> Potongan (IDR)</th>
					<th> Gaji Bersih(IDR)</th>
					<th> ID User Input</th>


					<th style="width: 125px;"> Action</p> </th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data_penggajian as $pgj) {
				?>
				<tr>
					<td><?php echo $pgj->id_t; ?></td>
					<td><?php echo $pgj->id_karyawan; ?></td>
					<td><?php echo $pgj->pendapatan; ?></td>
					<td><?php echo $pgj->potongan; ?></td>
					<td><?php echo $pgj->gaji_bersih; ?></td>
					<td><?php echo $pgj->id_user_input; ?></td>


					<td style="text-align: center;">
					<a href="<?php echo site_url('admin/penggajian/UbahDataPenggajian/'.$pgj->id_t); ?>" title="Edit Data"><span  class= "btn btn-primary float-right mt-3 ">Ubah</span></a>
					<a href="<?php echo site_url('admin/penggajian/HapusDataPenggajian/'.$pgj->id_t); ?>" title="Hapus Data"><span  class= "btn btn-danger float-right mt-3 ">Hapus</span></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
      <a href ="<?= base_url();?>admin/penggajian/TambahDataPenggajian" class= "btn btn-success float-right mt-3 ">Tambah Data Penggajian</a>
      <a href ="<?= base_url();?>admin/penggajian/penggajian_pdf" class= "btn btn-success float-left mt-3 ">Export PDF</a>
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
