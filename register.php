<?php
require "koneksi.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], \PASSWORD_DEFAULT);
    $role = $_POST["role"];
    $checkQuery = "SELECT * FROM users WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        echo "
            <script>
            alert('Username sudah digunakan! Silakan gunakan username lain.');
            document.location.href = 'register.php';
            </script>
            ";
    } else {
        $query = "INSERT INTO users (username, password, role) VALUES ('$username','$password', '$role')";
        if (mysqli_query($conn, $query)) {
            echo "
                <script>
                alert('Registrasi berhasil!');
                document.location.href = 'login.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Registrasi gagal!');
                document.location.href = 'register.php';
                </script>
                ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register | Pendataan Mahasiswa Universitas Mulawarman</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="styles/base.css" />

    <link rel="stylesheet" href="styles/login.css" />
</head>

<body>
    <section class="login-card" style="width: 25%;">
        <hgroup>
            <h1 class="login-title">
                Registrasi AIS
            </h1>
            <p class="login-description">
                Silakan registrasi untuk mengelola website
            </p>
        </hgroup>

        <form action="" method="post" class="login-form-container">
            <div class="login-form-group">
                <label for="username" class="login-form-title">Username</label>
                <input type="text" placeholder="Username" name="username" id="username" class="login-form-input" required>
            </div>

            <div class="login-form-group">
                <label for="password" class="login-form-title">Password</label>
                <input type="password" placeholder="Password" name="password" id="password" class="login-form-input" required>
            </div>

            <div class="login-form-group">
                <label for="role" class="login-form-title">Role</label>
                <select name="role" id="role" class="login-form-input" required>
                    <option name="role" value="Admin">Admin</option>
                    <option name="role" value="User">User</option>
                </select>
            </div>

            <button type="submit" name="submit" class="login-button">
                Register
            </button>
        </form>

        <div style="display: flex; justify-content:center; width: 100%; margin-top: 12px; align-items: center; justify-content:space-around;">
            <a href="login.php" class="back-btn">
                Back
            </a>
        </div>
    </section>

    <script>

    </script>
</body>

</html>