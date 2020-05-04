<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Участники | BikeRide</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./index.php" class="nav-link">Главная</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./members.php" class="nav-link">Участники</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./routes.php" class="nav-link">Маршруты</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./video.php" class="nav-link">Видео</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./results.php" class="nav-link">Результаты</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./bike-riders.php" class="nav-link active">Велопробеги</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./information.php" class="nav-link">Информация</a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BR-Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="./" class="d-block">Меню</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="./index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Главная
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./members.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Участники</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./routes.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Маршруты</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./video.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Видео</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./results.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Результаты</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./bike-riders.php" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Заезды</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./information.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Информация</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Участники</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Главная</a></li>
              <li class="breadcrumb-item"><a href="bike-riders.php">Велопробеги</a></li>
              <li class="breadcrumb-item active">Добавить велопробег&nbsp;</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Велопробеги</h3>
                <a href="add-bike-ride.php" class="btn btn-primary btn-sm float-right" target="_blank">Добавить запись</a>

              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Название</th>
                    <th>Дата</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  require_once("../RedBeanPHP5_4_2/rb.php");
                  R::setup('mysql:host=mysql_br;port=3306;dbname=brdb', 'root', 'root3004917779');
                  $results = R::getAll('SELECT * FROM bikeriders');
                  foreach ($results as $result) {
                    ?>
                    <tr>
                      <td><?= $result['name'] ?></td>
                      <td><?= $result['brdate'] ?></td>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; <?= date("Y") ?> <a href="./">BR-Admin</a>.</strong>
  Все права защищены.
  <div class="float-right d-none d-sm-inline-block">
    <b>BR-Admin</b> 1.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
