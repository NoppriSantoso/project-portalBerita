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
                            <a href="authentication\login.php">LOGIN</a>
                        </td>
                        <td><a href="authentication\register.php">REGISTRASI</a></td>
                    </tr>
                    <tr class="leftTop-Time">
                        <td colspan="2" style="text-align: center;">
                            <?php echo date("l j F Y"); ?>
                        </td>
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
                    <td class="berita-container bs">
                        <div class="berita-content">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li>Sport</li>
                            </ol>
                            <div class="headerJudul">
                                <h1>Hasil Thailand Open 2023: Kalah dari Wakil Tuan Rumah, Chico Banting Raket</h1>
                                <div class="sub-heading">
                                    <p style="font-size: 17px">WidyaDharma.com - <span>03/06/2023</span></p>
                                </div>
                            </div>
                            <br>
                            <div class="imgBerita">
                                <img src="img/bghealth.png" class="Image" alt="Foto Berita">
                            </div>
                            <br>
                            <div class="contentBerita">
                                <p>
                                    BANGKOK, KAMIS - Setelah tersingkir di perempat final Malaysia Masters, Apriyani
                                    Rahayu/Siti Fadia Silva Ramadhanti bertekad memperbaiki performa ketika tampil pada
                                    turnamen bulu tangkis Thailand Terbuka. Namun, mereka justru tersisih lebih cepat
                                    karena tidak bisa melawan tekanan yang muncul dari diri sendiri.
                                </p><br>
                                <p>
                                    Ganda putri terbaik Indonesia itu kalah pada babak kedua Thailand Terbuka BWF World
                                    Tour Super 500 saat menghadapi Rin Iwanaga/Kie Nakanishi (Jepang). Bermain di Indoor
                                    Stadium Huamark, Bangkok, Thailand, Kamis (1/6/2023), Apriyani/Fadia kalah dari
                                    ganda putri nomor enam Jepang itu dengan skor 12-21, 13-21.
                                </p><br>
                                <p>
                                    Hasil laga ini lebih buruk dibandingkan ketika mereka kalah pada perempat final
                                    turnamen berlevel sama sepekan sebelumnya, Malaysia Masters. Tak hanya itu, performa
                                    ketika berhadapan dengan Iwanaga/Nakanishi jauh di bawah kemampuan terbaik ganda
                                    Indonesia peringkat keempat dunia tersebut.
                                </p><br>
                                <p>
                                    “Hari ini, kami bermain melawan diri sendiri dan tidak bisa keluar dari tekanan itu.
                                    Pada akhirnya, kami tidak bisa mengeluarkan performa dengan baik. Mainnya bingung
                                    mau bagaimana” tutur Apriyani.
                                </p><br>
                                <p>
                                    Fadia bercerita, tekanan itu dirasakan karena mereka sangat menggebu-gebu ingin
                                    memenangi pertandingan. Apalagi, mereka ingin memperbaiki hasil ketika kalah pada
                                    perempat final Malaysia Masters. “Keinginan untuk menang jadi tidak bisa dikontrol.
                                    Jadinya, kami bermain kurang tenang,” kata Fadia.
                                </p><br>
                                <p>
                                    Thailand Terbuka ini sebenarnya menjadi kesempatan Apriyani/Fadia untuk mendapatkan
                                    poin ranking sebanyak mungkin pada masa kualifikasi Olimpiade Paris 2024. Oleh
                                    karena tidak mengikuti Thailand Terbuka 2022, mereka tak memiliki poin yang harus
                                    dipertahankan.
                                </p><br>
                            </div>
                        </div>
                        <!-- batas teritorial anda -->
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
                                <td class="beritePopulercontent">

                                    <!-- disini kasik logic query -->
                                    <?php $i = 0; ?>

                                    <?php while ($i < 10) : ?>
                                        <div class="top">
                                            <div class="rankBeritaPopuler">
                                                <p>#
                                                    <?= $i + 1; ?>
                                                </p>
                                            </div>
                                            <div class="kontenBeritaPopuler">
                                                <table class="TableKontenBeritaPopuler" border="0" cellpadding="5" cellspacing="0">
                                                    <tr>
                                                        <td class="judul">
                                                            <a href="pageBerita.php">
                                                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Vero laboriosam vel omnis praesentium tenetur nobis
                                                                    adipisci corrupti, velit nisi animi.</h3>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="view">
                                                            dibaca :
                                                            <?php echo "2" ?>
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