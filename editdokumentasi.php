<?php
  session_start();
  if (!isset($_SESSION['user'])){
    header('Location:login.php');
  }
  $username = $_SESSION['user'];
  require 'database.php';

    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null==$id ) {
        header("Location: dashboard.php?");
    }

    if (!empty($_POST)) {
        //keep track validation errors

        // keep track post values
        $album = $_POST['album'];
        $message = $_POST['message'];
        $picture = $_FILES['gambarDokumentasi']['name'];
        $date = date("Y-m-d");

        // validate input
        $valid = true;

        // update data
        if ($valid) {
            if($picture != null){
              $pdo = Database::connect();
              $sql = "Select * From dokumentasi WHERE id = $id";
              foreach ($pdo->query($sql) as $row) {
                  unlink("gambar/dokumentasi/".$row['filename']);
              }
              Database::disconnect();
              $pdo = Database::connect();
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "UPDATE dokumentasi set album = ?, filename = ?, keterangan = ?, tanggal = ? WHERE id = ?";
              $q = $pdo->prepare($sql);
              $q->execute(array($album,$album."_".$picture,$message,$date,$id));
              move_uploaded_file($_FILES['gambarDokumentasi']['tmp_name'],"gambar/dokumentasi/".$album."_".$picture);
              Database::disconnect();

            }else{
              $pdo = Database::connect();
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "UPDATE dokumentasi set album = ?, keterangan = ?, tanggal = ? WHERE id = ?";
              $q = $pdo->prepare($sql);
              $q->execute(array($album,$message,$date,$id));
              Database::disconnect();
            }
          echo "<script> location.replace('dokumentasi.php'); </script>";
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM dokumentasi where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $album = $data['album'];
        $keterangan = $data['keterangan'];
        $picture = $data['filename'];
        Database::disconnect();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Dokumentasi</title>
	<link rel="shortcut icon" href="img/12018021_562409237240309_1316303470_n.gif" />

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

	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/styles.js"></script>

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
                    <h1 class="page-header">Edit Dokumentasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.panel-heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                        <a href="dokumentasi.php"><i class="fa fa-arrow-left fa-fw"></i> Back</a><br><br>
                        <div class="row">
            <div class="col-md-8">
                <form name="sentMessage" id="contactForm" action="editdokumentasi.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                    <div class="control-group form-group">
                        <div class="controls">
                          <label>Pilih Album:</label>
                          <select name="album" id="album">
                            <?php
                            $pdo = Database::connect();
                            $sql = 'SELECT * FROM album';
                            foreach ($pdo->query($sql) as $row) {
                                  echo '<option value="'. $row['nama_album'] .'">'.$row[nama_album].'</option>';
                              }
                            ?>
                          </select>
                          <p class="help-block"></p>
                        </div>
                    </div>
					          <div class="control-group form-group">
                        <div class="controls">
                            <img width=200 height=100 src="gambar/dokumentasi/<?php echo !empty($picture)?$picture:'';?>"><br>
                            <label>Change Pictures :</label>
                            <input type="file" name="gambarDokumentasi" id="gambarDokumentasi"></input>
							              <label></label>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                          <label>Keterangan :</label>
                          <textarea rows="10" cols="100" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php echo !empty($message)?$message:'';?></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" id="Save">Save</button>
                </form>
            </div>

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
