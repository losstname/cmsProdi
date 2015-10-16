<?php
  session_start();
  if (!isset($_SESSION['user'])){
    header('Location:login.php');
  }
  $username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artikel</title>

    <!-- Bootstrap Core CSS -->
      <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- MetisMenu CSS -->
      <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

      <!-- Timeline CSS -->
      <link href="dist/css/timeline.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="dist/css/sb-admin-2.css" rel="stylesheet">

      <!-- Morris Charts CSS -->
      <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Welcome</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-user fa-fw"></i> <?php echo $username ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <li>
                          <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>
                      <li>
                          <a href="artikel.php"><i class="fa fa-file-text-o fa-fw"></i> Artikel</a>
                      </li>
                      <li>
                          <a href="materikuliah.php"><i class="fa fa-file-archive-o fa-fw"></i> Materi Kuliah</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-male fa-fw"></i> Profil<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li>
                              <a href="dosen.php">Dosen</a>
                          </li>
                          <li>
                              <a href="angkatan.php">Angkatan</a>
                          </li>
                        </ul>
                          <!-- /.nav-second-level -->
                      </li>
                      <li>
                          <a href="dokumentasi.php"><i class="fa fa-file fa-fw"></i> Dokumentasi</a>
                      </li>
                      <li>
                          <a href="penelitian.php"><i class="fa fa-files-o fa-fw"></i> Penelitian</a>
                      </li>
                      <li>
                          <a href="pengabdian.php"><i class="fa fa-link fa-fw"></i> Pengabdian</a>
                      </li>
                      <li>
                          <a href="publikasi.php"><i class="fa fa-share-alt-square fa-fw"></i> Publikasi</a>
                      </li>
                      <li>
                          <a href="users.php"><i class="fa fa-users fa-fw"></i> Users</a>
                      </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.panel-heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <a href="tambahartikel.php"><i class="fa fa-plus fa-fw"></i> Tambah Artikel</a><br><br>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Judul Artikel</th>
                                        <th>Nama Penulis</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include 'database.php';
                                        $pdo = Database::connect();
                                        $sql = 'Select * From post_artikel';
                                        foreach ($pdo->query($sql) as $row) {
                                            echo '<tr class="even gradeA">';
                                            echo '<td>'. $row['Topik'] .'</td>';
                                            echo '<td>'. $row['Nama'] .'</td>';
                                            echo '<td>'. $row['Telepon'] .'</td>';
                                            echo '<td>'. $row['Email'] .'</td>';
                                            echo '<td class="center"><a href="editartikel.php?id='.$row['id'].'"><i class="fa fa-edit fa-fw"></i>Edit</a><a href="deleteartikel.php?id='.$row['id'].'"><i class="fa fa-close fa-fw"></i>Hapus</a></td>';
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
     <script src="bower_components/jquery/dist/jquery.min.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

     <!-- Metis Menu Plugin JavaScript -->
     <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

     <!-- Morris Charts JavaScript -->
     <script src="bower_components/raphael/raphael-min.js"></script>
     <script src="bower_components/morrisjs/morris.min.js"></script>
     <script src="js/morris-data.js"></script>

     <!-- Custom Theme JavaScript -->
     <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
