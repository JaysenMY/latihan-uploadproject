<?php
    include 'koneksi.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan']; 
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi,"update mahasiswa set nama = '$nama',nim = '$nim',jurusan = '$jurusan',alamat = '$alamat' where kode = '$kode'");

    header("location:index.php");
?>