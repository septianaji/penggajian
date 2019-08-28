<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
   <!--Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= base_url();?>admin/dashboard_admin/index">
    <img src="././../../assets/img/abdi.png" width="150" height="80" class="d-inline-block align-top" alt="">




    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Logout
        </a>
          <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url();?>login/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Start Sidebar -->


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="<?= base_url();?>admin/jabatan/index" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Jabatan</span>
                </a>
                <a href="<?= base_url();?>admin/karyawann/index" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Karyawan</span>
                </a>
                <a href="<?= base_url();?>admin/Penggajian/index" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Penggajian</span>
                </a>
            </div>


        </ul>
    </div> <!-- End Sidebar -->
