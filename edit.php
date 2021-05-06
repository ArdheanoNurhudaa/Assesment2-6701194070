<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php"><img src="images/tel-u.png" width="20px"></a></a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="about.php">About</a></li>
      </li>
      <li class="active"><a href="datanilai.php">Data Nilai</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php"><span class="glyphicon glyphicon-download-alt"></span> Keluar</a></li></B>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Edit Data Nilai</h2>
  <div class="panel panel-default">
    <div class="panel-body">
 <div class="row clearfix">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
           <?php
	             include 'koneksi.php';
                $semester = $_GET['semester'];
                $data = mysqli_query($koneksi,"select * from ipk where semester='$semester'");
                while($d = mysqli_fetch_array($data)){
            ?>
	<form method="post" action="update.php">
     <div class="col-lg-12">
       <div class="form-group">
          <p> Semester </p> <span><input type="text" name="semester" class="form-control" value="<?php echo $d
          ['semester']; ?>">  </span>                      
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <p> IP </p> <span><input type="text" name="ipk" class="form-control" value="<?php echo $d['ipk']; ?>">  </span>                      
          </div>
     </div>
<button input type="submit" value="SIMPAN "class="btn btn-outline-primary">SIMPAN</button>
		<?php 
	}
	?>
                    </div>
                </div>
            </div>
        </div>        
    </div>
  </div>
</body>
</html>
