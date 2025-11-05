<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=(device-width), initial-scale=1.0">
    <title>Mahasiswa</title> 
    <style>
        fieldset{
            width: 325px;
            align: 'center';
        }
    </style>
</head>
<body bgcolor='orange'>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 align = 'center'>Tambah Data Mahasiswa</h2>
    <form method="post" action="tambah_aksi.php">
        <fieldset style = 'margin: 0px auto; font-size: 20px'>
            <table>
                <legend>Form Login</legend>
                <tr>
                    <td>Kode Mahasiswa</td>
                    <td><input type ="text" name ="kode"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><input type ="text" name ="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type ="number" name ="nim"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type ="text" name ="jurusan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type ="text" name ="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type ="submit" value ="SIMPAN"></td>
                </tr>        
            </table>
        </fieldset>
    </form>
    <br>
    <a href="index.php", style = "margin: 730px";>KEMBALI</a>
</body>
</html>