<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data</title>
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
      <li class="active"><a href="datanilai.php">Data Nilai</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php"><span class="glyphicon glyphicon-download-alt"></span> Keluar</a></li></B>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Tambah Data Nilai</h2>
    <div class="panel panel-default">
      <div class="panel-body">
    <form method="post" action="tambah_aksi.php">
        <div class="col-lg-12">
           <div class="form-group">
               <label for="semester">Semester:</label>
                  <input type="text" name="semester" class="form-control" placeholder="Semester" />
            </div>
         </div>
          <div class="col-lg-12">
             <div class="form-group">
               <label for="ip">IP:</label>
               <input type="text" name="ip" class="form-control" placeholder="IP" />
             </div>
                <button input type="submit" value="SIMPAN "class="btn btn-outline-primary">SIMPAN</button>
           </div>
    </form>
    </div>
  </div>
</div>
</body>
</html>
