<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Gudang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins'); ?>/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins'); ?>/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/plugins'); ?>/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/plugins'); ?>/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist'); ?>/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist'); ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata("nama"); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
          if ($this->session->userdata("role")=="Kasir") { ?>
           <li class="nav-item">
            <a href="<?= base_url('Dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="<?= base_url("barang"); ?>" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("permintaan_gudang"); ?>" class="nav-link">
            <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Permintaan Gudang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Config
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url("login/ubah_password"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah  Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("login/logout"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          <?php }else{ ?>
          <li class="nav-item">
            <a href="<?= base_url('Dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="<?= base_url("barang"); ?>" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("suplier"); ?>" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Data Suplier
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("barang/input_stock"); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Barang Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("barang/stock_keluar"); ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Barang Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("barang_return"); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Barang Return
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("po"); ?>" class="nav-link">
            <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Purchase Order
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("permintaan_gudang"); ?>" class="nav-link">
            <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Permintaan Gudang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url("laporan/barang_masuk"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("laporan/barang_keluar"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("laporan/barang_return"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Return</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("laporan/barang_service"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url("user"); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
               User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Config
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url("login/ubah_password"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah  Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("login/logout"); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mb2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>


