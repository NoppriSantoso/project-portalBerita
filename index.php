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
        .bottomNav .homePg {
            background-color: purple;
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
                include 'connection.php';

                try {
                    $userId = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;

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
        <div class="BodyContainer">
            <table class="BodyTable" border="0" cellpadding="5" cellspacing="5">
                <tr>
                    <td class="berita-container bs">
                        <table class="berita-content" border="0" cellpadding="5" cellspacing="0">

                            <!-- judul bergerak paling atas -->
                            <tr class="content-header">
                                <td class="header1">
                                    <div class="breakingNews">BREAKING NEWS</div>
                                </td>
                                <td class="header2">
                                    <marquee behavior="scroll" direction="left">
                                        <h1>
                                            <?php
                                            $sql = 'select judul_berita, jenis_berita, tgl_publish from tbl_berita order by tgl_publish desc';
                                            $result = $con->query($sql);
                                            $berita = $result->fetch_object();

                                            echo $berita->jenis_berita . ' | ' . $berita->judul_berita;
                                            ?>
                                        </h1>
                                    </marquee>
                                </td>
                            </tr>

                            <!-- headline berita breaking news -->
                            <tr class="content-topberita">
                                <td colspan="3">
                                    <div class="slider-wrapper">

                                        <div class="slider">
                                            <?php
                                            $sql = 'select * from tbl_berita order by rand() limit 5';
                                            $result = $con->query($sql);
                                            ?>
                                            <?php for ($i = 1; $i <= $result->num_rows; $i++) : ?>
                                                <?php
                                                $berita = $result->fetch_object();
                                                ?>
                                                <div class="imgCover" id="slide-<?= $i; ?>" onclick="location.href = 'pageBerita.php?idBerita=<?php echo $berita->id_berita ?>'">

                                                    <img src="img/<?= $berita->gambar ?>" alt="">

                                                    <div class="vignetteLayer"></div>
                                                    <div class="sliderContentHeadline">
                                                        <div class="headContainer">
                                                            <div class="jenis">
                                                                <p><?= $berita->jenis_berita ?></p>
                                                            </div>
                                                            <div class="waktu">

                                                                <!-- untuk ini dikasi logic juga -->
                                                                <p><?php echo date("l j F Y H:m:s", strtotime($berita->tgl_publish)); ?></p>

                                                            </div>
                                                        </div>
                                                        <div class="tittleContainer">
                                                            <h2><?= $berita->judul_berita ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>

                                        <!-- slider nav -->
                                        <div class="slider-nav">
                                            <?php for ($i = 1; $i <= $result->num_rows; $i++) : ?>
                                                <a href="#slide-<?= $i; ?>"></a>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <!-- berita daily -->
                            <tr class="content-beritaTerkini">
                                <td colspan="3">
                                    <h2>BERITA TERKINI</h2>
                                    <div class="dailyNews">

                                        <!-- disini kasik logic query -->
                                        <?php
                                        $sql = 'select a.*, b.kode_author, b.nama_author from tbl_berita a join tbl_author b on a.kode_author = b.kode_author order by tgl_publish desc';
                                        $result = $con->query($sql);

                                        $i = 1;
                                        ?>

                                        <?php while ($i <= $result->num_rows) : ?>
                                            <?php $berita = $result->fetch_object(); ?>
                                            <div class="konten <?= $i ?>" onclick="location.href = 'pageBerita.php?idBerita=<?php echo $berita->id_berita ?>'">
                                                <div class="gmbrDailyNews">
                                                    <img src="img/<?= $berita->gambar ?>" alt="<?= $berita->gambar ?>">
                                                </div>
                                                <div class="kontenDailyNews">
                                                    <table class="TableKontenDaily" border="0" cellspacing="0" cellpadding="5">
                                                        <tr>
                                                            <td class="jenis"><?= $berita->jenis_berita; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="judul row">
                                                                <a href="pageBerita.php?idBerita=<?= $berita->id_berita ?>">
                                                                    <h3><?= $berita->judul_berita ?></h3>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="author row">
                                                                <?php echo $berita->nama_author; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="waktu row"> <?= date("l j F Y", strtotime($berita->tgl_publish)); ?></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <?php $i++; ?>
                                        <?php endwhile; ?>

                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="sideBar-container bs">
                        <table class="viral-container" border="0" cellspacing="10" cellpadding="5">
                            <tr>
                                <td class="JudulViral">
                                    <h2>Terpopuler</h2>
                                </td>
                            </tr>
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
                                                            <a href="pageBerita.php?idBerita=<?php echo $berita->id_berita ?>">
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