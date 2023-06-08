<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="design.css">
</head>

<body style="margin:0px;">
    <table style="height:300px" cellpadding="0">
        <tr>
            <td rowspan="5" class="NavbarKiri" style="color:black; background-color:white;height:100%" padding="0">
                <table style="width:200px; height:100%" class="listbutton" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="gambar"><img src="gambar/WD-1.png" alt=""></td>
                    </tr>
                    <tr>
                        <td class="a" onclick="changePage('Home.php')" align="center"><a class="home"><b>Home</b></a></td>
                        <script>
                            function changePage(url) {
                                window.location.href = url;
                            }
                        </script>
                    </tr>
                    <tr>
                        <td class="c"><b>Management</b></td>
                    </tr>
                    <tr>
                        <td class="a" onclick="changePage('manage.php')" align="center"><a class="home"><b>Manajemen Berita</b></a></td>
                        <script>
                            function changePage(url) {
                                window.location.href = url;
                            }
                        </script>
                    </tr>
                    <tr>
                        <td class="a" onclick="changePage('Mailbox.php')" align="center"><a class="home"><b>Mailbox</b></a></td>
                        <script>
                            function changePage(url) {
                                window.location.href = url;
                            }
                        </script>
                    </tr>
                    <tr>
                        <td class="c"><b>Profil</b></td>
                    </tr>
                    <tr>
                        <td class="a" onclick="changePage('daftarUser.php')" align="center"><a class="home"><b>Daftar User</b></a></td>
                        <script>
                            function changePage(url) {
                                window.location.href = url;
                            }
                        </script>
                    </tr>
                    <tr>
                        <td class="a" onclick="changePage('ChangePass.php')" align="center"><a class="home"><b>Ganti Password</b></a></td>
                        <script>
                            function changePage(url) {
                                window.location.href = url;
                            }
                        </script>
                    </tr>
                    <tr>
                        <td style="height:107px;background-color: #874493;"></td>
                    </tr>
                    <tr>
                        <td class="a" onclick="changePage('Masuk/login.php')" align="center"><a class="home"><b>Logout</b></a></td>
                        <script>
                            function changePage(url) {
                                window.location.href = url;
                            }
                        </script>
                    </tr>
                </table>
            </td>
            <td class="NavbarKanan" align="right" style="background-color: #874493; color:white; height:103px;width:100%; ">
                <h1>Administrator</h1>
            </td>
        </tr>
        <tr>
            <td class="isi" rowspan="1" cellpadding="0">
                <iframe src="Halaman isi/Mailbox/user.php" style="width:100%"></iframe>
            </td>
        </tr>
        <tr>
            <td class="Footer" rowspan="1" align="center" style="background-color: #874493; color:white; height:30px;width:100%;">
                <div class="isi" margin="0px">tes123</div>
            </td>
        </tr>

    </table>
</body>

</html>