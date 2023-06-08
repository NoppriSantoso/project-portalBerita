<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {

  $id_berita = $_POST["id"];
  $judul_berita = $_POST['judul'];
  $kode_author = $_POST['author'];
  $isi_berita = $_POST['isi'];
  $jenis_berita = $_POST['kategori'];
  $gambar = $_FILES['gambar']['name'];
  $popularity = rand(0, 300);
  $tgl_publish = date("Y-m-d");

  // Move the uploaded file to a desired location
  $cek = move_uploaded_file($_FILES['gambar']['tmp_name'], '../../gambar' . $gambar . uniqid());



  // Insert the data into the database
  $query = mysqli_query($conn, "INSERT INTO tbl_berita
                          VALUES 
                          ('$id_berita', '$kode_author','$judul_berita' ,'$isi_berita', '$jenis_berita', '$gambar',$popularity,'$tgl_publish')");


  if (mysqli_affected_rows($conn) > 0) {
    echo "
          <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'daftarberita.php';
          </script>
      ";
  } else {
    echo "
          <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'daftarberita.php';
          </script>
      ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tambah Berita</title>

</head>
<style>
  * {
    font-family: Arial, Helvetica, sans-serif;
  }

  td.kepala {
    height: 50px;
    width: 900px;
    color: black;
    text-align: center;
  }

  td.waktu {
    text-align: right;
    height: 30px;
    width: 900px;
    color: black;
  }

  input.id {
    background-color: grey;
  }

  table.isian {
    border-radius: 50px 50px 50px 50px
  }
</style>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td class="kepala">
          <b>FORM TAMBAH BERITA</b>
        </td>
      </tr>
      <tr>
        <td class="waktu">
          <b><?php
              date("Y-d-m H:i:s");
              echo date('l, d-m-Y  H:i:s');
              ?></b>
        </td>
      </tr>
    </table>
    <table class="isian" width="700" height="450" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#6d3177">
      <tr>
        <td width="200" height="20"> </td>
        <td width="40"> </td>
        <td width="400"> </td>
      </tr>
      <tr>
        <td height="27" align="right" valign="top">
          <font color='white'>ID
        </td>
        </font>
        <td align="center" valign="top">
          <font color='white'>:
        </td>
        </font>
        <td valign="top"><label>
            <input name="id" type="text" size="10" readonly class="id" value=" <?php echo 'BR' . str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT); ?>">
            <font color='white'></font>
          </label></td>
      </tr>
      <tr>
        <td height="27" align="right" valign="top">
          <font color='white'>Judul Berita
        </td>
        </font>
        <td align="center" valign="top">
          <font color='white'>:
        </td>
        </font>
        <td valign="top"><label>
            <input type="text" name="judul">
          </label></td>
      </tr>
      <tr>
        <td height="27" align="right" valign="top">
          <font color='white'>Isi
        </td>
        </font>
        <td align="center" valign="top">
          <font color='white'>:
        </td>
        </font>
        <td valign="top"><label>
            <textarea name="isi" rows="5" cols="50"></textarea>
          </label></td>
      </tr>

      <tr>
        <td height="27" align="right" valign="top">
          <font color='white'>Author
        </td>
        </font>
        <td align="center" valign="top">
          <font color='white'>:
        </td>
        </font>
        <td valign="top"><label>
            <input type="text" name="author">
          </label></td>
      </tr>
      <tr>
        <td height="27" align="right" valign="top">
          <font color='#fefefe'>Kategori
        </td>
        </font>
        <td align="center" valign="top">
          <font color='#fefefe'>:
        </td>
        </font>
        <td valign="top"><label>
            <select name="kategori">
              <option selected="selected">--Pilih--</option>
              <option>LifeStyle</option>
              <option>Sport</option>
              <option>Education</option>
              <option>Health</option>
              <option>Politics</option>
              <option>Food</option>
            </select>
          </label></td>
      </tr>
      <tr>
        <td height="27" align="right" valign="top">
          <font color='#fefefe'>Gambar
        </td>
        </font>
        <td align="center" valign="top">
          <font color='#fefefe'>:
        </td>
        </font>
        <td valign="top"><label>
            <font color='#fefefe'><input type="file" name="gambar" value="Browse..."></font>
      </tr>


      <tr>
        <td height="42"> </td>
        <td> </td>
        <td>
          <div>
            <input type="submit" name="tambah" value="Tambah">
            <input type="reset" name="reset" value="Kosongkan">
            <input type="button" name="cancel" onclick="self.history.back();" value="Cancel">
          </div>
        </td>
      </tr>

    </table>
  </form>
</body>

</html>