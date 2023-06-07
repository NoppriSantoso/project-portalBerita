<?php

    include 'connection.php';

    $userId = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;
    $idBerita = $_POST['idBerita'];
    $komentar = $_POST['komentar'];

    $sql = "insert into tbl_komentar (id_user,id_berita,komentar) values ('$userId','$idBerita','$komentar')";
    $con->query($sql);

    header("Location: pageBerita.php?idBerita=$idBerita");

?>