<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Hapus data dari tabel
    $sql = "DELETE FROM tbl_mailbox WHERE id_email = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus dari tabel.";


    } else {
        echo "Terjadi kesalahan saat menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak tersedia.";
}
$conn->close();
