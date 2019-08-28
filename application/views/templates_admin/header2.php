<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style= "background-color: 		#000000">
              <a class="navbar-brand" href="<?= base_url();?>admin/Dashboard_admin/index"><img src=".././assets/img/abdi.png" width="200"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

    </nav>
    <div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">

  <div class="list-group list-group-flush">
    <a href="<?= base_url();?>admin/jabatan/index" class="list-group-item list-group-item-action bg-light">Jabatan</a>
    <a href="<?= base_url();?>admin/karyawann/index" class="list-group-item list-group-item-action bg-light">Karyawan</a>
    <a href="<?= base_url();?>admin/penggajian/TambahDataTransaksi" class="list-group-item list-group-item-action bg-light">penggajian</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Rincian Gaji</a>
    <a href="<?= base_url();?>Login/Logout" class="list-group-item list-group-item-action bg-light">Logout</a>
  </div>
</div>