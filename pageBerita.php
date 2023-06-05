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
                            <!-- section gambar berita -->
                            <div class="imgBerita">
                                <img src="img/bghealth.png" class="Image" alt="Foto Berita">
                            </div>
                            <br>
                            <!-- section isi berita -->
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
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus minima sunt libero et, delectus non animi laborum pariatur quae! Ratione quidem dolor consequatur qui voluptatibus vel dicta maxime, error amet deleniti eius soluta quia assumenda beatae exercitationem nemo dolorum nesciunt ad ipsum culpa provident! Facilis atque eveniet assumenda soluta dolorum nihil. Ratione quo asperiores eligendi est provident sequi illo, sint repudiandae ex, molestias autem veniam saepe. Asperiores voluptatibus nemo error debitis aut obcaecati distinctio facilis molestias incidunt quaerat neque corporis, magnam reprehenderit dignissimos amet autem, vel optio. Doloribus modi nulla maxime quia, natus, praesentium itaque in possimus distinctio placeat optio iure quam, consequatur pariatur vel veritatis sed sint? Voluptate magni natus exercitationem nesciunt facilis soluta reprehenderit tempora, tempore iure! Rerum necessitatibus nemo a culpa adipisci maiores commodi tempora repellendus minima obcaecati veritatis sequi amet officiis dolorum, corrupti nesciunt porro earum deleniti iste fugiat! Quod cumque voluptatibus nihil unde quae. Quaerat ratione perspiciatis dolore nam assumenda quidem, vero voluptates aspernatur, molestias culpa asperiores debitis nulla similique nisi laudantium quae accusantium! Odit accusantium dolores nulla dolore in tenetur nam exercitationem, debitis doloribus, libero totam enim sapiente aliquam quidem consequuntur mollitia veniam praesentium. Similique voluptates dolor optio quod architecto veritatis libero commodi. Iste sit fugit aliquam sunt aperiam et esse doloremque saepe suscipit eius provident impedit soluta cupiditate magnam dolorum officia, possimus assumenda temporibus, earum veniam laborum. A ducimus rerum iusto optio minus eum inventore tenetur nemo nisi facilis explicabo, ex nihil voluptatibus dignissimos in impedit nesciunt! Ab, libero ipsam ratione repellendus similique voluptas, ut officiis sunt dicta dolor deserunt laboriosam? Voluptatibus ut distinctio delectus facere iusto, dicta laboriosam? Autem libero rem esse enim laborum repudiandae cum consequuntur nemo architecto, deserunt iste delectus ipsa impedit illum consequatur! Blanditiis impedit non eos eligendi saepe unde id et laborum inventore iusto aut vero nihil praesentium earum, porro deleniti repellat, neque autem nulla delectus reiciendis dicta necessitatibus ad? Sunt illo, id incidunt tempora reiciendis assumenda ea distinctio possimus corporis tenetur soluta laboriosam perferendis suscipit ipsam! Officia exercitationem aut magni obcaecati voluptate soluta omnis nemo dignissimos ipsum provident itaque voluptates, harum earum aliquid adipisci qui possimus pariatur nulla sint labore. Laudantium voluptates labore dolorem ex incidunt, earum reprehenderit modi repellat itaque sint doloremque autem. Facere, quidem inventore? Molestias iste quae dolore repellendus odio deleniti! Sed eos quia minus expedita accusantium dolor excepturi inventore unde asperiores ipsa nihil ratione quos, sunt ex veritatis repellat cumque ea. Quisquam nisi magnam id, ab, molestiae autem eius hic exercitationem, qui nemo recusandae beatae cupiditate quibusdam rerum mollitia sapiente nam sequi non tempora commodi amet nihil consectetur natus! Aut quo illo ab perferendis aperiam nihil accusamus pariatur? Ex nemo tenetur distinctio harum quasi dolorum quibusdam magnam, nobis officiis asperiores accusantium sit, officia qui aliquid fugiat eaque fuga ullam! Dolorem nulla quisquam corrupti ex odit velit, nesciunt ipsa veniam et sequi, in praesentium facilis eligendi ut iste porro sit repellat. Adipisci ullam unde tempore maiores fugit aut quia id omnis impedit, tempora harum, expedita sunt iusto illum recusandae eligendi perferendis magni, hic nesciunt?
                                </p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas non, obcaecati molestias quaerat nesciunt distinctio culpa voluptatum magni voluptates exercitationem consequuntur suscipit natus possimus, nam sunt, id magnam eaque eum facere neque veritatis at praesentium expedita nisi! Velit, quos dolorum ex aliquam cupiditate repellendus numquam incidunt doloribus tenetur voluptate, quisquam assumenda, sapiente mollitia facilis laboriosam? Ratione dolore quos reiciendis dignissimos doloribus totam fugit! Eligendi hic vel voluptatem beatae, asperiores porro eum nesciunt aperiam illo dicta officia fuga mollitia commodi quis veniam nam dolorum atque? Similique eaque quia aspernatur consequuntur dolorum. Aut, officiis labore reiciendis quasi nostrum voluptates vero ipsam inventore fuga non, minima saepe ut itaque cumque iusto architecto molestiae alias consequatur quibusdam vitae sint adipisci eaque mollitia. Explicabo ipsam pariatur, consequatur voluptate hic nihil, suscipit quasi reprehenderit ex odit itaque non quaerat, omnis vel. Totam impedit nisi et nostrum blanditiis libero saepe consequuntur perferendis. Officiis iure impedit similique? Sint itaque harum quaerat beatae odio officia corporis suscipit aliquid, dolore tempore ut voluptate id sunt quasi possimus nobis eveniet magni ipsa eaque. Sint similique, quaerat deserunt autem suscipit culpa, iste non fugiat odit at nihil amet corporis debitis excepturi aliquam adipisci. Exercitationem quisquam asperiores, assumenda velit maxime aut, dolores omnis deleniti, possimus consectetur eveniet earum recusandae! Ratione corrupti nulla non officia, hic ab quisquam! Qui, dolorem explicabo voluptas repudiandae placeat iste mollitia minus ad facilis adipisci cupiditate quae commodi, ipsa doloribus. Dignissimos necessitatibus cumque quasi consectetur ipsam earum excepturi iusto sint quas, facere vitae, eaque suscipit delectus reiciendis facilis magnam. Adipisci neque laborum nam voluptates quisquam alias sunt accusantium. Quae beatae maiores at itaque, dolorem provident ea deleniti numquam! Laborum, itaque consequuntur repellat magni magnam sit corrupti, esse illum eveniet molestiae ab. Repudiandae, repellat maxime! Eum itaque pariatur corrupti enim ab quisquam porro consectetur optio? Iusto commodi nemo, beatae, quam eius dicta excepturi non provident perferendis laboriosam ut vel earum sunt iste rem eos! Eius libero cupiditate illum asperiores impedit. Fugiat veritatis quod vero accusamus corporis eos delectus nemo sit! Porro delectus numquam qui aperiam vel accusantium, impedit doloribus minus maxime ut molestiae eveniet fugit saepe voluptas dicta sunt, repudiandae voluptates nisi? Ea quisquam repellendus harum ipsam iure aut laborum aspernatur recusandae, cumque cupiditate eos omnis maiores deleniti voluptatum dolor voluptas alias odit. Eaque delectus, officiis, debitis iure ipsa esse nemo labore laboriosam, perferendis aliquid error nam eius fugiat minima ea doloremque laborum. Dolorem excepturi unde atque perferendis nesciunt animi? Officia at debitis necessitatibus voluptates, repudiandae nobis ea voluptatibus nostrum reprehenderit ipsum recusandae blanditiis maxime incidunt reiciendis assumenda, deleniti, magnam et quae ad tenetur minima eum expedita praesentium? Nesciunt repellat ullam temporibus, aliquid assumenda aliquam in, cupiditate ducimus vero, architecto dolorem odio libero rem eveniet. Velit ut error veritatis aspernatur vitae. Asperiores voluptatum ab illum fugiat velit, doloribus rerum iure nesciunt beatae sunt, amet culpa quidem cumque accusamus provident. Sapiente, iusto consectetur totam animi consequuntur perferendis, praesentium eaque nulla saepe delectus ipsa obcaecati neque reiciendis quia, ducimus ipsam facilis asperiores aliquid vel dignissimos veritatis beatae modi? Inventore quasi odio quos.</p>
                            </div>


                            <!-- disini passing data authorny -->
                            <div class="authorSection">
                                Author: <?= 'kasik nama author'; ?>
                            </div>
                            <div class="sectionLine">

                            </div>

                            <!-- section komentar -->
                            <div class="commentSection-Container">
                                <div class="commentDisplayContainer">
                                    <?php $count = 5; ?>
                                    <div class="commentCounter">
                                        <?= $count; ?> Komentar
                                    </div>
                                    <div class="commentContent">

                                        <?php for ($i = 0; $i < $count; $i++) : ?>
                                            <div class="namaUser">
                                                <h3>Nama User</h3>
                                            </div>
                                            <div class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius blanditiis alias at consequuntur. Nostrum enim adipisci quia dicta dolore?</div>
                                        <?php endfor; ?>

                                    </div>
                                </div>
                                <div class="commentInput">
                                    <form action="" method="post">
                                        <input type="text" name="" id="" class="txtComment" placeholder="Tambahkan Komentar...">
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