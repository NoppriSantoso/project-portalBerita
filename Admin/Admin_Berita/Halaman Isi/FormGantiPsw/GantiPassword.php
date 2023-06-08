<?php

include 'koneksi.php';

$result = isset($_COOKIE["user"]) ? $idUser = $_COOKIE["user"] : $idUser = null;

if ($idUser !== null) {
    $query = mysqli_query($conn, "SELECT * FROM tbl_login WHERE id_user = '$idUser'");
    $user = $query->fetch_object();
    // var_dump($user);
    // exit;

    if (isset($_POST["confirm"])) {
        $oldpass = hash("sha256", $_POST["oldpsw"]);
        $newPass = hash("sha256", $_POST["newpsw"]);
        $confirmPass = hash("sha256", $_POST["cfrpsw"]);

        // var_dump();
        // exit;

        if ($oldpass !== $user->password) {
            echo "
                <script>
                    alert('Password lama anda salah, mohon diperiksa kembali.');
                    document.location.href = 'GantiPassword.php';
                </script>";
        } else if ($newPass ===  $oldpass) {
            echo "
                <script>
                    alert('Password tidak boleh sama dengan password lama anda, dimohon untuk diperiksa kembali!');
                </script>";
        } else if ($confirmPass !== $newPass) {
            echo "
                <script>
                    alert('Password tidak sama');
                </script>";
        } else {
            $queryUpdate = mysqli_query($conn, "UPDATE tbl_login set password = '$newPass' WHERE id_user = '$idUser'");
            try {
                if (mysqli_affected_rows($conn)) {
                    echo "
                        <script>
                            alert('Password berhasil diupdate');
                            document.location.href = 'GantiPassword.php';
                        </script>";
                }
            } catch (\Throwable $th) {
                echo "
                    <script>
                        alert('Password gagal diupdate: " . $th->getMessage() . "');
                        document.location.href = 'GantiPassword.php';
                    </script>";
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table class="tblhead" width="100%" border="0">
            <tr class="dsntr">
                <td>REMEMBER YOUR OLD PASSWORD</td>
            </tr>
        </table>
        <table class="tblisi" width="100%" border="0">
            <tr class="dsntr">
                <td>OLD PASSWORD</td>
                <td> <input type="password" class="dsninput" name="oldpsw" placeholder="Enter Your Password" id="id_password">
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                </td>
            </tr>

            <tr class="dsntr">
                <td>NEW PASSWORD</td>
                <td><input class="dsninput" type="password" name="newpsw">
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                </td>
            </tr>
            <tr class="dsntr">
                <td>CONFIRM PASSWORD</td>
                <td><input class="dsninput" type="password" name="cfrpsw">
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                </td>
            </tr>
            <table width="100%" border="0">
                <td class="tdbutton" colspan="2">
                    <div align="center" class="buttons" style="background-color:#cdcbcb">
                        <input class="button2" type="reset" name="cancel" value="CANCEL">
                        <input class="button1" type="submit" name="confirm" value="CONFIRM">
                    </div>
                </td>
            </table>
        </table>
    </form>
</body>

</html>