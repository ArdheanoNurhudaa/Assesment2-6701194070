<?php 
include 'koneksi.php';
$semester = $_GET['semester'];
mysqli_query($koneksi,"delete from ipk where semester='$semester'");
header("location:datanilai.php");
?>