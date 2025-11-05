
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
        <h2>Login</h2>
            <form method = "post">
                <fieldset>
                    <table>
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
                            <td>
                                <button type = "submit" name = "login"  >Login</button>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <p>Create Account |<a href="register.php"> Daftar di sini</a></p>
    </div>
</body>