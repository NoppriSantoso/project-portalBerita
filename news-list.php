<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UWDP Potal Berita</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .bottomNav .foodPg {
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
            <div class="logo"></div>
            <!-- search -->
            <div class="search-container">
                <div class="search-box">
                    <div class="search-input">
                        <input type="text" class="input" placeholder="Search...." />
                    </div>
                    <div class="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <!-- verification -->
            <div class="leftTop-container">
                <table class="leftTop" border="0" cellpadding="5" cellspacing="8">
                    <tr class="leftTop-auth">
                        <td>
                            <a href="#">LOGIN</a>
                        </td>
                        <td><a href="#">REGISTRASI</a></td>
                    </tr>
                    <tr class="leftTop-Time">
                        <td colspan="2" style="text-align: center;"> <?php echo date("l j F Y"); ?></td>
                    </tr>
                </table>
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
                    <td class="berita-container">
                        <table class="berita-content" border="0" cellpadding="5" cellspacing="0">
                            <tr class="content-beritaTerkini">
                                <td colspan="3">
                                    <h2>Hasil Pencarian <?php echo $_POST['searchKeyword'] ?></h2>
                                    <div class="dailyNews">

                                        <!-- disini kasik logic query -->
                                        <?php
                                            $i = 0;
                                            $query = 'where like "%searchKeyword%"';
                                        ?>

                                        <?php while ($i < 10) : ?>
                                            <div class="konten 1">
                                                <div class="gmbrDailyNews">
                                                    <img src="img/stars.png" alt="">
                                                </div>
                                                <div class="kontenDailyNews">
                                                    <table class="TableKontenDaily" border="0" cellspacing="0" cellpadding="5">
                                                        <tr>
                                                            <td class="jenis">Food</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="judul row">
                                                                <h3>Judul berita</h3>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="author row">
                                                                author
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="waktu row"> <?php echo date("l j F Y"); ?></td>
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
                    <td class="sideBar-container">
                        <table class="viral-container" border="0" cellspacing="10" cellpadding="5">
                            <tr>
                                <td class="JudulViral">
                                    <h2>Terpopuler</h2>
                                </td>
                            </tr>
                            <tr>
                                <td class="beritePopulercontent">

                                    <!-- disini kasik logic query -->
                                    <?php $i = 0; ?>

                                    <?php while ($i < 10) : ?>
                                        <div class="top">
                                            <div class="rankBeritaPopuler">
                                                <p>#<?= $i + 1; ?></p>
                                            </div>
                                            <div class="kontenBeritaPopuler">
                                                <table class="TableKontenBeritaPopuler" border="0" cellpadding="5" cellspacing="0">
                                                    <tr>
                                                        <td class="judul">
                                                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero laboriosam vel omnis praesentium tenetur nobis adipisci corrupti, velit nisi animi.</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="view">
                                                            dibaca : <?php echo "2" ?>
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
                            <a href="instagram.com" class="insta"></a>
                            <a href="facebook.com" class="fb"></a>
                            <a href="telegram.com" class="tele"></a>
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