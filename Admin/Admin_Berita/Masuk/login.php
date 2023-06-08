<?php
session_start();

// Konfigurasi koneksi ke database
$host = "localhost"; // Ganti dengan nama host database Anda
$user = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan password database Anda
$database = "berita"; // Ganti dengan nama database Anda

// Membuat koneksi ke database menggunakan mysqli
$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['id_user'])) {
    header("Location: dashboard.php");
    exit();
}

// Memeriksa apakah form login telah disubmit
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan sanitasi input untuk mencegah SQL Injection
    $username = $koneksi->real_escape_string($username);
    $password = $koneksi->real_escape_string($password);

    // Melakukan query untuk mencari pengguna dengan username yang sesuai
    $query = "SELECT * FROM tbl_login WHERE username='$username'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Memeriksa kecocokan password
        if (password_verify($password, $hashedPassword)) {
            // Login berhasil
            $_SESSION['id_user'] = $row['id_user'];
            header("Location: Home.php");
            exit();
        } else {
            // Login gagal
            $error = "Username atau password salah!";
        }
    } else {
        // Login gagal
        $error = "Username atau password salah!";
    }
}

// Menutup koneksi setelah selesai menggunakan database
$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN UWDP PORTAL BERITA</title>
</head>

<body>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <div class="container">
        <form action="" method="post">
            <div class="col-12">
                <h3 class="text-center" style="font-size: 2rem; font-weight: 800;">LOGIN</h3>
                <label>Username</label><br>
                <input type="text" class="form-control mt-2 mb-3" name="username" placeholder="Enter Your Username">
                <div class="password-container">
                    <label>Password</label><br>
                    <input type="password" name="password" class="form-control mt-2 mb-4" name="password" placeholder="Enter Your Password" id="id_password" required>
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                </div>
                <p class="login-register-text" style="text-align: center;">Belum punya akun? Yuk <a class="text-dark" style="font-weight: bold;" href="register.php" required><u>Register</u></a></p>
                <div class="input-group">
                    <button name="submit" type="submit" class="btn mt-3" value="login">LOGIN</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>