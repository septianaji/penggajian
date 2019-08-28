<!DOCTYPE html>

<html>
<head>
<title></title>
</head>
<body>


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


    
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($karyawan as $kry) {
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


    </tr>
    <?php } ?>
  </tbody>
</table>

</body>
</html>
