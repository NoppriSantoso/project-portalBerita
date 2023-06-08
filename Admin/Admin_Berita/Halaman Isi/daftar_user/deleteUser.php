<?php

include 'koneksi.php';

$id_user = $_GET["id_user"];

try {
    $mhs = mysqli_query($conn, "DELETE FROM tbl_login WHERE id_user = '$id_user'");
    echo "
        <script>
            alert('User berhasil dihapus!');
            document.location.href = 'DaftarUser.php';
        </script>
    ";
} catch (\Throwable $th) {
    echo "
        <script>
            alert('User Gagal dihapus!');
            document.location.href = 'DaftarUser.php';
        </script>
    ";
}
