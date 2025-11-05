<?php
include 'koneksi.php';

$kode = $_GET['id'];

mysqli_query($koneksi,"delete from mahasiswa where kode = '$kode'"); 

header("location:index.php");
?>