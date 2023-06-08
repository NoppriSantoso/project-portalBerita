<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Berita</title>

</head>

<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    input.id {
        background-color: grey;
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

    table.isian {
        border-radius: 50px 50px 50px 50px
    }
</style>

<body>
    <?php
    include 'koneksi.php';
    $id_brt = $_GET['id'];

    $edit = mysqli_query($conn, "SELECT * FROM tbl_berita WHERE id_berita='$id_brt'");
    $baris = mysqli_fetch_array($edit);
    echo '
    <form action="updateberita.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="kepala">
                <b>FORM EDIT BERITA</b>
            </td>
        </tr>
        <tr>
            <td class="waktu">
                <b><?php
                    date("Y-d-m H:i:s");
                    echo date("l, d-m-Y  H:i:s");
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
                <font color="white">ID
            </td>
            </font>
            <td align="center" valign="top">
                <font color="white">:
            </td>
            </font>
            <td valign="top"><label>
                    <input name="id" type="text" size="10" readonly class="id" value="' . $baris['id_berita'] . '">
                    <font color="white"></font>
                </label></td>
        </tr>
        <tr>
            <td height="27" align="right" valign="top">
                <font color="white">Judul Berita
            </td>
            </font>
            <td align="center" valign="top">
                <font color="white">:
            </td>
            </font>
            <td valign="top"><label>
                    <input type="text" name="judul" value="' . $baris['judul_berita'] . '">
                </label></td>
        </tr>
        <tr>
            <td height="27" align="right" valign="top">
                <font color="white">Isi
            </td>
            </font>
            <td align="center" valign="top">
                <font color="white">:
            </td>
            </font>
            <td valign="top"><label>
                    <textarea input name="isi" type="textarea" size="150" style="resize: none; width: 300px; height: 150px">' . $baris['isi_berita'] . '</textarea>
                </label></td>
        </tr>

        <tr>
            <td height="27" align="right" valign="top">
                <font color="white">Author
            </td>
            </font>
            <td align="center" valign="top">
                <font color="white">:
            </td>
            </font>
            <td valign="top"><label>
                    <input type="text" name="author" value="' . $baris['kode_author'] . '">
                </label></td>
        </tr> ';
    ?>
    <tr>
        <td height="27" align="right" valign="top">
            <font color="#fefefe">Kategori
        </td>
        </font>
        <td align="center" valign="top">
            <font color="#fefefe">:
        </td>
        </font>
        <td valign="top"><label>
                <select name="kategori" value="">
                    <option selected="selected">--Pilih--</option>
                    <option value="LifeStyle" <?php if ($baris['jenis_berita'] == "LifeStyle") {
                                                    echo 'selected="selected"';
                                                } ?>>LifeStyle</option>
                    <option value="Sport" <?php if ($baris['jenis_berita'] == "Sport") {
                                                echo 'selected="selected"';
                                            } ?>>Sport</option>
                    <option value="Education" <?php if ($baris['jenis_berita'] == "Education") {
                                                    echo 'selected="selected"';
                                                } ?>>Education</option>
                    <option value="Health" <?php if ($baris['jenis_berita'] == "Health") {
                                                echo 'selected="selected"';
                                            } ?>>Health</option>
                    <option value="Politics" <?php if ($baris['jenis_berita'] == "Politics") {
                                                    echo 'selected="selected"';
                                                } ?>>Politics</option>
                    <option value="Food" <?php if ($baris['jenis_berita'] == "Food") {
                                                echo 'selected="selected"';
                                            } ?>>Food</option>
                </select>
            </label></td>
    </tr>
    <?php
    echo '
        <tr>
            <td height="27" align="right" valign="top">
                <font color="#fefefe">Gambar
            </td>
            </font>
            <td align="center" valign="top">
                <font color="#fefefe">:
            </td>
            </font>
            <td valign="top"><label>
                    <font color="#fefefe"><input type="file" name="gambar" value="' . $baris['gambar'] . '"></font>
        </tr>
        <tr>
            <td height="42"> </td>
            <td> </td>
            <td>
                <div>
                    <input type="submit" name="edit" value="Edit" onclick="self.history.back();">
                    <input type="button" name="cancel" onclick="self.history.back();" value="Cancel">
            </td>
        </tr>
    </table>
    </form>';
    ?>
</body>

</html>