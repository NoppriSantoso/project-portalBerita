<?php

include '../daftar_user/koneksi.php';


$query = "SELECT COUNT(*) as jumlah_berita FROM tbl_berita";

$result = $conn->query($query);

$berita = $result->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <table class="tblheader" width="100%" border="0">
        <tr>
            <td class="tdheader"><b>HOME</b></td>
        </tr>
    </table>
    <table width="100%" border="0">
        <tr>
            <td width="50px"><img src="image/berita.png"></td>
            <td class="tdisi">BERITA : <?= $berita->jumlah_berita ?></td>
        </tr>
    </table>
    <table width="100%" border="0">
        <?php
        $query = "SELECT SUM(popularity) as view_count FROM tbl_berita";

        $result = $conn->query($query);

        $berita = $result->fetch_object();
        ?>
        <tr>
            <td width="50px"><img src="image/view.png"></td>
            <td class="tdisi">VIEW : <?= $berita->view_count ?></td>
        </tr>
    </table>
    <table width="100%" border="0">
        <?php
        $query = "SELECT COUNT(*) as jmlh_pesan FROM tbl_mailbox";

        $result = $conn->query($query);

        $berita = $result->fetch_object();
        ?>
        <tr>
            <td width="50px"><img src="image/mailbox.jpg"></td>
            <td class="tdisi">MESSAGE USER : <?= $berita->jmlh_pesan ?></td>
        </tr>
    </table>
</body>

</html>