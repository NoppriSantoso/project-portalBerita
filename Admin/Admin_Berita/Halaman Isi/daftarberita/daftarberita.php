<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css.css">
</head>

<body>
    <table>
        <tr>
            <td>
                <a href="tambahberita.php" class="adding-btn" style="width:128px">TAMBAH BERITA</a>
            </td>
            <td style="width:79%">
                <p align="center" style="font-size:20px;"><b>DAFTAR BERITA</b></p>
            </td>
        </tr>
    </table>
    <br>
    <form action="">
        <section class="tampilantabel">
            <table border=1 cellspacing="0">
                <thead>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th colspan="2">Opsi</th>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $hasil = mysqli_query($conn, 'SELECT * FROM tbl_berita');
                    while ($baris = mysqli_fetch_array($hasil)) : ?>
                        <tr>
                            <td><?= $baris['id_berita'] ?></td>
                            <td><?= $baris['judul_berita'] ?></td>
                            <td><?= $baris['kode_author'] ?></td>
                            <td><?= $baris['jenis_berita'] ?></td>
                            <td><?= $baris['gambar'] ?></td>
                            <td>
                                <a href="hapusberita.php ? id=<?= $baris['id_berita'] ?>" class="delete-btn" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">HAPUS</a>
                            </td>
                            <td>
                                <a href="editberita.php ? id=<?= $baris['id_berita'] ?>" class="option-btn">EDIT</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    </form>
</body>

</html>