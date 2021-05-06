<?php 
include 'koneksi.php';
$semester = $_POST['semester'];
$ip = $_POST['ip'];
mysqli_query($koneksi,"insert into ipk values('$semester','$ip')");
header("location:datanilai.php");
?>