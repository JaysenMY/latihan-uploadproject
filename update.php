<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body bgcolor = 'orange'>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 align = "center">
        CRUD DATA MAHASISWA
    </h2>
    <a href= "index.php", style = "margin-left: 720px";>KEMBALI</a>
    <br>
    <br>
    <h3 align = "center">EDIT DATA MAHASISWA</h3>

    <?php 
    include 'koneksi.php';
    $kode = $_GET['id'];
    $kuliah = mysqli_query($koneksi,"select * from mahasiswa where kode = '$kode'");
    while ($d = mysqli_fetch_array($kuliah)){
        ?>
        <form method = "post" action = "ubah.php">
            <table style = "margin: 0px auto; font-size: 30px";>
                <tr>
                    <td>Kode Mahasiswa</td>
                    <td>
                        <input type="hidden" name = "kode" value = "<?php echo $d ['kode'];?>">
                        <input type="text" name = "kode" value = "<?php echo $d ['kode'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>
                        <input type="text" name = "nama" value = "<?php echo $d ['nama'];?>">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="number" name = "nim" value = "<?php echo $d ['nim'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <input type="text" name = "jurusan" value = "<?php echo $d ['jurusan'];?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name = "alamat" value = "<?php echo $d ['alamat'];?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value = "simpan">
                    </td>
                    <input type="hidden" name = "kode" value = "<?php echo $d ['kode'];?>">
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>