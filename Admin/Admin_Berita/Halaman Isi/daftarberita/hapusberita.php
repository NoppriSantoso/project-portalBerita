<?php
    include 'koneksi.php';
    $id_brt = $_GET['id'];

    mysqli_query($conn, "DELETE FROM tbl_berita WHERE id_berita='$id_brt'");

if (mysqli_affected_rows($conn) > 0) {
    echo "
          <script>
              alert('data berhasil dihapus!');
              document.location.href = 'daftarberita.php';
          </script>
      ";
} else {
    echo "
          <script>
              alert('data gagal dihapus!');
              document.location.href = 'daftarberita.php';
          </script>
      ";
}
