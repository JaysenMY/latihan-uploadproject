<?php
include 'koneksi.php';
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap'];
    $pssword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username', '$password', '$nama')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi Berhasil!' Silahkan Login.');
        window.location='login.php';</script>";
    }
    else{
        echo "Gagal mendaftar";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <div class = "conlog">
        <h2>Form Registrasi</h2>
            <form method = "post">
                <fieldset>
                    <table>
                        <tr>
                            <td>
                                <label for = "nama_lengkap">Masukan Nama: </label>
                            </td>
                            <td>
                                <input type = "text" name = "nama_lengkap" placeholder = "Nama Lengkap" required></input>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "username">Masukan Username: </label>
                            </td>
                            <td>
                                <input type = "text" name = "username" placeholder = "Username" required></input>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <label for = "username">Masukan Password: </label>
                            </td>
                            <td>
                                <input type = "Password" name = "password" placeholder = "Password"></input>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td colspan = '2' style = "align: center";>
                                <button type = "submit" name = "register">Daftar</button>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        <p>Login |<a href="login.php">masuk di sini</a></p>
    </div>
</body>