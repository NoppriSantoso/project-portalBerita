<?php
include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$author = $_POST['author'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];
$gambar = $_FILES['gambar']['name'];
mysqli_query($conn, "UPDATE tbl_berita SET judul_berita='" . $judul . "', 
    kode_author='" . $author . "', isi_berita='" . $isi . "', jenis_berita='" . $kategori . "', gambar='" . $gambar . "' WHERE id_berita='" . $id . "'");

if (mysqli_affected_rows($conn) > 0) {
    echo "
          <script>
              alert('data berhasil diedit!');
              document.location.href = 'daftarberita.php';
          </script>
      ";
} else {
    echo "
          <script>
              alert('data gagal diedit!');
              document.location.href = 'daftarberita.php';
          </script>
      ";
}
