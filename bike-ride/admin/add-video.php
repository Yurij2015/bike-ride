<?php
$mgs = "";
if ($_POST) {
  $link = trim(htmlspecialchars($_POST['link']));
  $description = trim(htmlspecialchars($_POST['description']));
  $bike_riders_id = $_POST['bike_riders_id'];
  if (!empty($link)) {
    require_once("../RedBeanPHP5_4_2/rb.php");
    R::setup('mysql:host=mysql_br;port=3306;dbname=brdb', 'root', 'root3004917779');
    $video = R::dispense('video');
    $video->link = $link;
    $video->description = $description;
//    $video->bike_riders_id = $bike_riders_id;
    R::store($video);
    $msg = "Данные отправлены!";
    header("Location: " . "./video.php");
  } else {
    $msg = 'Ошибка отправки данных';
  }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Видео | BikeRide | Admin</title>

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
        <a href="index3.html" class="nav-link">Главная</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Участники</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Маршруты</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link active">Видео</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Результаты</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Велопробеги</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Информация</a>
      </li>
    </ul>
    <!-- Right navbar links -->
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
            <a href="./video.php" class="nav-link active">
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
            <a href="./bike-riders.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Велопробеги</p>
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
            <h1 class="m-0 text-dark">Видео</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Главная</a></li>
              <li class="breadcrumb-item"><a href="video.php">Видео</a></li>
              <li class="breadcrumb-item active">Добавить видео&nbsp;</li>
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Добавить <small>запись</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">

                    <label for="link">Код видео вида - "JzbKTRFXQXU". Находится в ссылке на youtube-видео</label>
                    <input type="text" name="link" class="form-control" id="link"
                           placeholder="Код видео" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Описание видео</label>
                    <input type="text" name="description" class="form-control" id="description"
                           placeholder="Описание видео" required>
                  </div>
<!--                  <div class="form-group">-->
<!--                    <label for="bike_riders_id">Велопробег</label>-->
<!--                    <input type="text" name="bike_riders_id" class="form-control" id="bike_riders_id"-->
<!--                           placeholder="Велопробег">-->
<!--                  </div>-->
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Сохранить</button>
              <a href="members.php" type="submit" class="btn btn-warning">Назад</a>

            </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
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
  <strong>Copyright &copy; <?= date("Y") ?> <a href="/">AdminLTE.io</a>.</strong>
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
