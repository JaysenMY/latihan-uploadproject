<?php
    include 'koneksi.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim']; 
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi,"insert into mahasiswa(kode,nama,nim,jurusan,alamat) values('$kode','$nama','$nim','$jurusan','$alamat')");

    header("location:index.php");
?>  