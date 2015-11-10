<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Program Studi Teknik Informatika</title>
	<link rel="shortcut icon" href="img/12018021_562409237240309_1316303470_n.gif" />
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/12018021_562409237240309_1316303470_n.gif" width="40"> <a class="navbar-brand" href="index.php">Teknik Informatika Universitas Hasanuddin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
					<!-- <li>
                        <a href="services.html">Services</a>
                    </li> -->
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profil_dosen.php">Profil Dosen</a>
                            </li>
                            <li>
                                <a href="profil_angkatan.php">Profil Angkatan</a>
                            </li>
							<li>
                                <a href="visi_misi.php">Visi dan Misi</a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Post <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="post_article.php">Posting Artikel</a>
                            </li>
                            <li>
                                <a href="post_materi.php">Posting Materi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a href="publikasi_dosen.php">Publikasi</a>
                            </li>
                            <li>
                                <a href="penelitian_dosen.php">Penelitian Dosen</a>
                            </li>
                            <li>
                                <a href="pengabdian_masyarakat.php">Pengabdian Masyarakat</a>
                            </li>
                            <li>
                                <a href="kurikulum.php">Kurikulum</a>
                            </li>
                               </li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog_artikel.php">Blog Artikel</a>
                            </li>
                            <li>
                                <a href="blog_materi.php">Blog Materi</a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lainnya <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="fasilitas.php">Fasilitas</a>
                            </li>
                            <li>
                                <a href="dokumentasi_page.php">Dokumentasi</a>
                            </li>
							<li>
								<a href="services.php">Services</a>
							</li>
                            <li>
                                <a href="faq.php">FAQ</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Publikasi
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Akademik</a>
                    </li>
                    <li class="active">Publikasi</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Judul </th>
                                        <th>Nama Dosen</th>
                                        <th>Penjelasan</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include 'database.php';
                                        $pdo = Database::connect();
                                        $sql = 'Select * From publikasi';
										foreach ($pdo->query($sql) as $row) {
                                            echo '<tr class="even gradeA">';
                                            echo '<td>'. $row['judul'] .'</td>';
                                            echo '<td>'. $row['nama_dosen'] .'</td>';
                                            echo '<td>'. $row['penjelasan'] .'</td>';
                                            echo '<td>'. $row['tahun'] .'</td>';        
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
					<?php
					
						$limit = 10;
						$p=$_GET['p']=="" ? 1:$_GET['p'];
						$start=($p-1)*$limit;
						$db = Database::connect();
						
						$sql=$db->prepare("SELECT * FROM publikasi ORDER BY id LIMIT :start, :limit");
						$sql->bindValue(':limit', $limit, PDO::PARAM_INT);
						$sql->bindValue(':start', $start, PDO::PARAM_INT);
						$sql->execute();
						$data=$sql->fetch();
						
						$count=$db->prepare("SELECT COUNT(id) FROM users ORDER BY id");
						$count->execute();
						$count=$count->fetchColumn();
						
						$countP=(ceil($count/$limit)) + 1;
						$tW=($countP*50) + $countP;
						echo"<center style='overflow-x:auto;margin-top:10px;padding-bottom:10px;'>";
						echo"<div style='width:".$tW."px'>";
						for($i=1;$i<$countP;$i++){
							$isC=$i==$_GET['p'] ? "b-green":"";
							echo "<a href='?p=$i'><button class='pgbutton $isC'>$i</button></a>";
						}
						echo"</div>";
						echo"</center>";
						//echo"$count Results Found.";
					?>
			</div>
			
		</div>
					
                    <!--<li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright &copy; www.unhas.ac.id 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
