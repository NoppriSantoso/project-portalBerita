<?php

    include 'connection.php';
    include 'roleEnum.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $storePassword = hash('sha256', $password);

        $sql = "insert into tbl_login (username, password, email, role) values ('$username', '$storePassword', '$email', '$roleEnumUser')";
        $con->query($sql);

        header("Location: authentication/login.php");
    }
    else {
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
    <link rel="stylesheet" href="authentication/style.css">
    <title>REGISTER UWDP PORTAL BERITA</title>
</head>

<body>
    <div class="container">
        <form action="storeUser.php" method="post">
            <div class="col-12">
                <h3 class="text-center" style="font-size: 2rem; font-weight: 800;">REGISTER</h3>
                <label>Username</label><br>
                <input type="text" class="form-control mt-2 mb-3" name="username" placeholder="Enter Your Username" value="$username">
                <label>Email</label><br>
                <input type="text" class="form-control mt-2 mb-3" name="email" placeholder="Enter Your Email" value="$email">
                <div class="password-container">
                    <label>Password</label><br>
                    <div class="password-input">
                        <input type="password" class="form-control mt-2 mb-4" name="password" placeholder="Enter Your Password" id="id_password">
                        <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                    </div>
                </div>
                <div class="password-container">
                    <label>Confirm Password</label><br>
                    <div class="password-input">
                        <input type="password" class="form-control mt-2 mb-4" name="cpassword" placeholder="Confirm Your Password" id="id_cpassword">
                        <i class="far fa-eye" id="toggleCPassword" style="cursor: pointer;"></i>
                    </div>
                </div>

                <p style="color: red;">konfirmasi password tidak sama!</p>
                <p class="login-register-text" style="text-align: center;">Sudah Punya Akun? <a class="text-dark" style="font-weight: bold;" href="login.php"><u>Login</u> Yuk</a></p>
                <div class="input-group">
                    <button name="submit" class="btn mt-3">REGISTER</button>
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
    <script>
        const toggleCPassword = document.querySelector('#toggleCPassword');
        const cpassword = document.querySelector('#id_cpassword');
        toggleCPassword.addEventListener('click', function(e) {
            const type = cpassword.getAttribute('type') === 'password' ? 'text' : 'password';
            cpassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
<?php
    }

?>