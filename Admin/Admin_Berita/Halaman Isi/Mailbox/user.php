<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <table class="tableUserContainer" border="1" cellspacing="0" cellpadding="5">
            <thead class="headerTable">
                <tr>
                    <th colspan="5" class="headerRow">
                        <div class="refresh-button">
                            <button onclick="location.reload()">Refresh</button>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th class="no">ID Mail</th>
                    <th class="nama">Nama User</th>
                    <th class="isi">Isi Mail</th>
                    <th class="tgl">Tanggal</th>
                    <th class="delete">Action</th>
                </tr>
            </thead>
            <tbody class="bodyTable">
                <?php
                include 'koneksi.php'; //hubungkan ke database
                $sql = "SELECT * FROM tbl_mailbox"; //mengambil semua data dari tabel mailbox
                $result = $conn->query($sql); //menjalankan query yang didapat dari koneksi
                $no = 0; //memberi nomor urut pada tabel 

                if ($result->num_rows > 0) { //memastikan data ada atau g
                    while ($row = $result->fetch_assoc()) { //fetch_assoc untuk mengabil satu baris tabel
                        $no++; //increment
                ?>
                        <tr>
                            <td class="idemail"><?php echo $row['id_email']; ?></td>
                            <td class="nm"><?php echo $row['id_user']; ?></td>
                            <td class="isi"><?php echo $row['pesan']; ?></td>
                            <td class="pesan"><?php echo $row['balasan']; ?></td>
                            <td><?php echo date("Y/m/d"); ?></td>
                            <td class="delete-button">
                                <button onclick="deleteRow(this, '<?php echo $row['id_email']; ?>')">Delete</button>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="5">Tidak ada data</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        function deleteRow(button, id) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);

            // Mengirim permitaan hapus ke file hapus_data.php
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "hapus_mailbox.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText); // Tampilkan pesan respon dari hapus_data.php
                }
            };
            xhr.send("id=" + id);
        }
    </script>
    <script>
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>

</html>