<?php

include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM tbl_login");
if (isset($_POST["keyword"])) {
  $keyword = $_POST["keyword"];

  $query = mysqli_query($conn, "SELECT * FROM tbl_login 
                                                    WHERE 
                                                    id_user LIKE '%$keyword%'
                                                    or
                                                    username LIKE '%$keyword%'
                                                    or 
                                                    email LIKE '%$keyword%'");
}

if (isset($_POST["refresh"])) {
  header("location: DaftarUser.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <container>
    <div class="search-container">
      <div class="search-box">
        <div class="search-input">
          <form action="" method="post">
            <label for="search">Search : </label>
            <input type="text" name="keyword" id="search" size="50" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
            <button type="submit" name="cari">Cari!</button>
            <button type="submit" name="refresh">Refresh!</button>
          </form>
        </div>
        <div class="search-icon">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </div>
  </container>

  <table border="1" cellpadding="5" cellspacing="0" class="tableUser">
    <thead class="headerTable">
      <th>ID USER</th>
      <th>Username</th>
      <th>Email</th>
      <th>Role</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
          <td><?= $row["id_user"]; ?></td>
          <td><?= $row["username"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["role"]; ?></td>
          <td>
            <a href="deleteUser.php?id_user=<?= $row['id_user']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>

  </table>



</body>

</html>