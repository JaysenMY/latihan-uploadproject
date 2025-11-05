<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = 'orange'>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a href="tambah.php", style = "margin-left: 650px; font-size: 20px";>+ Tambah Mahasiswa</a>
    <br>
    <br>
    <table border = "1", style = "margin: 0px auto; font-size: 30px";>
        <tr>
            <th>Kode Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Edit</th>
        </tr>
        <?php
        include 'koneksi.php';
        $kuliah = mysqli_query($koneksi,"select * from mahasiswa");
        while($d = mysqli_fetch_array($kuliah)){
            ?>
        <tr>
            <td><?php echo $d["kode"]; ?></td>
            <td><?php echo $d["nama"]; ?></td>
            <td><?php echo $d["nim"]; ?></td>
            <td><?php echo $d["jurusan"]; ?></td>
            <td><?php echo $d["alamat"]; ?></td>
            <td>
                <a href="update.php?id=<?php echo $d["kode"];?>">UPDATE</a>
                <a href="delete.php?id=<?php echo $d["kode"];?>">DELETE</a>
            </td>
        </tr> 
        <?php
        } 
        ?>
    </table>
</body>
</html>

