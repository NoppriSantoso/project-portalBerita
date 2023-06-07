<?php
    include 'connection.php';

    $userId = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;

    if (is_null($userId)) {
        header("Location: authentication/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UWDP Potal Berita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .berita-content {
            padding: 30px;
        }

        .content-beritaTerkini h2 {
            border-top: unset;
            margin: 20px auto 10px;
            padding-top: unset;
            padding-left: 20px;
            font-size: 30px;
            display: inline-block;
            width: 100%;

        }
    </style>

</head>

<body>
    <!-- navigation bar -->
    <div class="Navbar">
        <!-- top Navigation -->
        <div class="topNav cf">
            <!-- logo -->
            <div class="logo" onclick="location.href = 'index.php'"></div>
            <!-- search -->
            <form action="news-list.php" method="POST">
                <div class="search-container">
                    <div class="search-box">
                        <div class="search-input">
                            <input type="text" class="input" name="searchKeyword" placeholder="Search...." />
                        </div>
                        <div class="search-icon">
                            <button type="submit" style='font-size:24px'><i class='fa fa-search'></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- verification -->
            <div class="leftTop-container">
                <?php
                try {
                    if ($userId !== null) {
                        $sql = "SELECT * FROM tbl_login WHERE id_user = '$userId'";
                        $result = $con->query($sql);
                        $user = $result->fetch_object();

                        if ($result->num_rows > 0) :
                ?>
                            <table class="leftTop" border="0" cellpadding="5" cellspacing="0">
                                <tr class="leftTop-auth">
                                    <td colspan="2">
                                        <div class="userMenu">
                                            <a class="user" href="#"><?php echo $user->username ?></a>
                                            <div class="dropdown">
                                                <a href="authentication/login.php" onclick="return confirm('Do you want to logout?')">Logout</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="leftTop-Time">
                                    <td colspan="2" style="text-align: center;"><?php echo date("l j F Y"); ?></td>
                                </tr>
                            </table>
                        <?php else : ?>
                            <table class="leftTop" border="0" cellpadding="5" cellspacing="0">
                                <tr class="leftTop-auth">
                                    <td>
                                        <a href="authentication/login.php">LOGIN</a>
                                    </td>
                                    <td><a href="authentication/register.php">REGISTRASI</a></td>
                                </tr>
                                <tr class="leftTop-Time">
                                    <td colspan="2" style="text-align: center;"><?php echo date("l j F Y"); ?></td>
                                </tr>
                            </table>
                        <?php endif;
                    } else {
                        ?>
                        <table class="leftTop" border="0" cellpadding="5" cellspacing="0">
                            <tr class="leftTop-auth">
                                <td>
                                    <a href="authentication/login.php">LOGIN</a>
                                </td>
                                <td><a href="authentication/register.php">REGISTRASI</a></td>
                            </tr>
                            <tr class="leftTop-Time">
                                <td colspan="2" style="text-align: center;"><?php echo date("l j F Y"); ?></td>
                            </tr>
                        </table>
                <?php
                    }
                } catch (\Throwable $th) {
                    // Handle the error gracefully
                    // You can log the error, display a friendly message, or take any other appropriate action
                    echo "An error occurred: " . $th->getMessage();
                }
                ?>
            </div>
        </div>

        <!-- bottom navigation -->
        <div class="bottomNav">
            <a href="index.php" target="_self" class="homePg">Home</a>
            <a href="lifestyle.php" target="_self" class="lifestylePg">Lifestyle</a>
            <a href="sport.php" target="_self" class="sportPg">Sport</a>
            <a href="education.php" target="_self" class="educationPg">Education</a>
            <a href="health.php" target="_self" class="healthPg">Health</a>
            <a href="politics.php" target="_self" class="politicsPg">Politics</a>
            <a href="food.php" target="_self" class="foodPg">Food</a>
        </div>
    </div>

    <div class="container">
        <!-- body di bawah navbar -->
        <?php
            include 'connection.php';

            $idBerita = $_GET['idBerita'];
            $sql = "select a.*, b.kode_author, b.nama_author from tbl_berita a join tbl_author b on a.kode_author = b.kode_author where id_berita = '$idBerita'";
            $result = $con->query($sql);

            $berita = $result->fetch_object();
        ?>
        <div class="BodyContainer">
            <table class="BodyTable" border="0" cellpadding="5" cellspacing="5">
                <tr>
                    <td class="berita-container bs">
                        <div class="berita-content">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><?= $berita->id_berita ?></li>
                            </ol>
                            <div class="headerJudul">
                                <h1><?= $berita->judul_berita ?></h1>
                                <div class="sub-heading">
                                    <p style="font-size: 17px"><?= $berita->nama_author ?> - <span><?= date("j/m/Y", strtotime($berita->tgl_publish)); ?></span></p>
                                </div>
                            </div>
                            <br>
                            <!-- section gambar berita -->
                            <div class="imgBerita">
                                <img src="img/<?= $berita->gambar ?>" class="Image" alt="<?= $berita->gambar ?>">
                            </div>
                            <br>
                            <!-- section isi berita -->
                            <div class="contentBerita">
                                <p>
                                    <?= $berita->isi_berita ?>
                                </p>
                            </div>


                            <!-- disini passing data authorny -->
                            <div class="authorSection">
                                Author: <?= $berita->nama_author ?>
                            </div>
                            <div class="sectionLine">

                            </div>

                            <!-- section komentar -->
                            <div class="commentSection-Container">
                                <div class="commentDisplayContainer">
                                    <?php
                                        $sql = "select a.*, b.id_user, b.username from tbl_komentar a join tbl_login b on a.id_user = b.id_user where id_berita = '$idBerita'";
                                        $result = $con->query($sql);

                                        $count = $result->num_rows;
                                    ?>
                                    <div class="commentCounter">
                                        <?= $count; ?> Komentar
                                    </div>
                                    <div class="commentContent">

                                        <?php for ($i = 0; $i < $count; $i++) : ?>
                                            <?php
                                                $komentar = $result->fetch_object();
                                            ?>
                                            <div class="namaUser">
                                                <h3><?= $komentar->username ?></h3>
                                            </div>
                                            <div class="comment"><?= $komentar->komentar ?></div>
                                        <?php endfor; ?>

                                    </div>
                                </div>
                                <div class="commentInput">
                                    <form action="storeKomentar.php" method="post">
                                        <input type="hidden" name="idBerita" id="idBerita" value="<?= $idBerita ?>">
                                        <input type="text" name="komentar" id="komentar" class="txtComment" placeholder="Tambahkan Komentar...">
                                        <input type="submit" value="Post" class="btnPost">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>

                    <!--------------------------------------------------------------------------------------------------------------------------------------------------- -->



                    <!-- ini jangan di kacau dah -->
                    <td class="sideBar-container bs">
                        <table class="viral-container" border="0" cellspacing="10" cellpadding="5">
                            <tr>
                                <td class="JudulViral">
                                    <h2>Terpopuler</h2>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td class="beritePopulercontent">

                                    <!-- disini kasik logic query -->
                                    <?php
                                        $sql = 'select id_berita, judul_berita, popularity from tbl_berita order by popularity desc limit 10';
                                        $result = $con->query($sql);

                                        $i = 0;
                                    ?>

                                    <?php while ($i < $result->num_rows) : ?>
                                        <?php $berita = $result->fetch_object(); ?>
                                        <div class="top">
                                            <div class="rankBeritaPopuler">
                                                <p>#<?= $i + 1; ?></p>
                                            </div>
                                            <div class="kontenBeritaPopuler">
                                                <table class="TableKontenBeritaPopuler" border="0" cellpadding="5" cellspacing="0">
                                                    <tr>
                                                        <td class="judul">
                                                            <a href="pageBerita.php?idBerita=<?php echo $berita->id_berita?>">
                                                                <h3><?= $berita->judul_berita ?></h3>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="view">
                                                            dibaca : <?= $berita->popularity ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <!-- footer -->
        <div class="footer">
            <p class="copy">
            <table class="footer-content" border="0" cellpadding="5" cellspacing="10">
                <tr>
                    <td colspan="6">
                        <div class="medsos">
                            <a href="#twitter.com" class="twitter"></a>
                            <a href="#instagram.com" class="insta"></a>
                            <a href="#facebook.com" class="fb"></a>
                            <a href="#telegram.com" class="tele"></a>
                            <a href="#" class="utube"></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Tentang Kami</a>
                    </td>
                    <td>
                        <a href="#">Redaksi</a>
                    </td>
                    <td>
                        <a href="#">Info Iklan</a>

                    </td>
                    <td>
                        <a href="#">Pedoman Media Siber</a>

                    </td>
                    <td>
                        <a href="#">Disclaimer</a>

                    </td>
                    <td>
                        <a href="#">Kontak Kami</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">Copyright 2023 All Rights Reserved by Kelompok 1</td>
                </tr>
            </table>
            </p>
            </d>

        </div>




</body>

</html>