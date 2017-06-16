<?php
include('Shopify_RegisterPage/sessioneditprofile.php');
$_SESSION['edit_user']=NULL;
$_SESSION['delete_cart']=NULL;
$_SESSION['add_cart']=NULL;
$_SESSION['confirm_user']=NULL;
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
$queryproduk=mysql_query("select * from produk", $connection);
$numrow=mysql_num_rows($queryproduk);
if ($numrow > 0) {
    // Array the ID's...
    $id_arraytotal = array();
    $idtotal=array();
    $xtotal=array();
    while ($rowtotal = mysql_fetch_assoc($queryproduk)) {
        $id_arraytotal []=$rowtotal['produkID'];
    }
    $ytotal=0;
    while($ytotal<32)
    {
        $xtotal[$ytotal]=rand(0, ($numrow-1));
        $idtotal[$ytotal]=$id_arraytotal[$xtotal[$ytotal]];
        $ytotal++;
    }
}
?>
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Selamat Datang di Shopify - Situs Jual Beli Online Mudah Dan Hemat &#9679; Shopify &#9679;</title>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato-Regular", sans-serif;
        }
        
        body,
        html {
            height: 100%;
            color: #777;
            line-height: 1.8;
        }
        /* Create a Parallax Effect */
        .bgimg-1 {
            opacity: 0.9;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .profile1{
            margin-top:21px;
            width:100%;
            height:28px;
            text-align:center;
            font-size:16px;
        }
        .bgimg-2,
        .bgimg-3,
        .bgimg-4 {
            opacity: 0.7;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* First image (Logo. Full height) */
        
        .bgimg-1 {
            background-image: url('shopify_logo/Wallpaper/Layout1.jpg');
            min-height: 100%;
        }
        /* Second image (Portfolio) */
        
        .bgimg-2 {
            background-image: url("shopify_logo/Wallpaper/Layout2.jpg");
            min-height: 400px;
        }
        /* Third image (Contact) */
        
        .bgimg-3 {
            background-image: url("shopify_logo/Wallpaper/Layout3.jpg");
            min-height: 400px;
        }
        
        .bgimg-4 {
            background-image: url("shopify_logo/Wallpaper/Layout4.jpg");
            min-height: 400px;
        }
        /* Adjust the position of the parallax image text */
        
        .w3-display-middle {
            bottom: 45%;
        }
        
        .w3-wide {
            letter-spacing: 10px;
        }
        
        .w3-hover-opacity {
            cursor: pointer;
        }
        
        .logo {
            float: left;
            width: 140px;
            height: 50px;
            margin-top: 5px;
        }
        
        .logo1 {
            float: left;
            margin-left: 7px;
            height: 60px;
        }
        
        .logo2 {
            float: left;
            border-radius: 100%;
            height: 30px;
            width: 30px;
            cursor: pointer;
            margin-right: 5px;
        }
        
        .satu {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat;
        }
        
        .dua {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -33px 0px;
        }
        
        .tiga {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -65px 0px;
        }
        
        .empat {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -98px 0px;
        }
        
        .lima {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -129px 0px;
        }
        
        .enam {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -160px 0px;
        }
        
        .tujuh {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -193px 0px;
        }
        
        .shop {
            margin-left: 50px;
            width: 80px;
            height: 80px;
            border-radius: 100%;
        }
        
        .w3-col p {
            font-size: 10px;
        }
        
        .one {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -10px;
        }
        
        .two {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -110px;
        }
        
        .three {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -205px;
        }
        
        .four {
            background: url('shopify_logo/icon/home.png') no-repeat -9px -300px;
        }
        
        .five {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -400px;
        }
        
        .six {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -496px;
        }
    </style>
    <link rel="icon" href="shopify_logo/favicon.png">
    <link rel="stylesheet" href="HomePage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS_Frameworks/W3.CSS/w3.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="CSS_Frameworks/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="CSS_Frameworks/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <!-- KICKSTART -->
    <script src="CSS_Frameworks/HTML-KickStart-master/js/jquery.min.js"></script>
    <script src="CSS_Frameworks/HTML-KickStart-master/js/kickstart.js"></script>
    <link rel="stylesheet" href="CSS_Frameworks/HTML-KickStart-master/css/kickstart.css" media="all" />
    <!-- KICKSTART -->
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="w3-top">
                <ul class="w3-navbar w3-left-align w3-large">
                    <li class="w3-hide-small w3-right"><a href="" class="w3-hover-white">About</a></li>
                    <li class="w3-hide-medium w3-right w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white" title="Profile"><?php echo $login_session;?>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="w3-dropdown-content dropdown-color profile w3-card-4" style="right:78px">
                            <a href="Shopify_RegisterPage/editprofile.php" class="w3-hover-white ">Profile</a>
                            <a href="cart.php" class="w3-hover-white ">Cart</a>
                            <a href="confirmuser.php" class="w3-hover-white ">Konfirmasi</a>
                            <a href="Shopify_RegisterPage/logout.php" class="w3-hover-white ">Logout</a>
                        </div>
                    </li>
                    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                        <a class="w3-hover-white w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    </li>
                    <li><a href="Shopify-HomePage.php" class="homecolor"><i class="fa fa-home w3-margin-right"></i>Shopify</a></li>
                    <li class="w3-hide-small w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white">Cari Barang</a>
                        <div class="w3-dropdown-content dropdown-color1 w3-card-4">
                            <form method="post" action="searchuser.php">
                            <label for="cari">Cari&#58;</label>
                            <input type="text" name="cari" id="cari" placeholder="Aku mau beli..." autocomplete="on">
                            </form>
                        </div>
                    </li>
                    <li class="w3-hide-small" onclick="w3_open()"><a class="w3-hover-white" href="javascript:void(0)" >Kategori Barang <i class="fa fa-caret-down"></i></a></li>
                    <li class="w3-hide-small">
                        <div class="center-logo"><img src="shopify_logo/icon-shopify-hire.png" alt="ctr-logo"></div>
                    </li>
                    <nav class="w3-dropnav-content w3-card-4" style="display:none" id="myDropnav">
                        <div class="w3-container">
                        </div>
                        <div class="w3-container w3-margin w3-padding-ver-64">
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/makanan.php" title="Makanan">Makanan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/mobil.php" title="Mobil">Mobil</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/helm.php" title="Helm">Helm</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kacamata.php" title="Kacamata">Kacamata</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/minuman.php" title="Minuman">Minuman</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/motor.php" title="Motor">Motor</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/permen.php"  title="Permen">Permen</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/sepatu.php" title="Sepatu">Sepatu</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/handphone.php" title="Handphone">Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/laptop.php" title="Laptop">Laptop</a><br>
                                
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/sepeda.php" title="Sepeda">Sepeda</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/jamtangan.php" title="Jam Tangan">Jam Tangan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/televisi.php" title="Televisi">Televisi</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/aksesorishandphone.php" title="Aksesoris Handphone">Aksesoris Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/aksesoriskomputer.php" title="Aksesoris Komputer">Aksesoris Komputer</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/printer.php" title="Printer">Printer</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kamera.php" title="Kamera">Kamera</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/perlengkapanolahraga.php" title="Perlengkapan Olahraga">Perlengkapan Olahraga</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/baju.php" title="Baju">Baju</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/celana.php" title="Celana">Celana</a><br>
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kipasangin.php" title="Kipas Angin">Kipas Angin</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kulkas.php" title="Kulkas">Kulkas</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/peralatankecantikan.php" title="Peralatan Kecantikan">Peralatan Kecantikan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/mainan.php" title="Mainan">Mainan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kartumemori.php" title="Kartu Memori">Kartu Memori</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/speaker.php" title="Speaker">Speaker</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/alattulis.php" title="Alat Tulis">Alat Tulis</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/airconditioner.php" title="Air Conditioner">Air Conditioner</a><br>
                            </div>
                      </div>
                      
                    </nav>
                    <script>
                    var x = document.getElementById("myDropnav");
                    function w3_open() {
                        if (x.className.indexOf("w3-show") == -1) {
                            x.className += " w3-show";
                        } else {
                            x.className = x.className.replace(" w3-show", "");
                        }
                    }
                    function w3_close() {
                        x.className = x.className.replace(" w3-show", "");
                    }
                    </script>
                </ul>
            </div>
        </nav>
    </header>
    <div class="w3-teal w3-hover-light-blue  profile1">
        <b class="w3-text-red">Profile Anda telah disimpan!!!</b> 
	</div>
    <!-- First Layout ( Logo Shopify ) -->
    <div class="bgimg-1 w3-display-container">
        <div class="w3-display-middle">
            <a href="Shopify-HomePage.php"><span class="w3-center w3-animate-opacity shopify-logo"><img src="shopify_logo/Shopify-Logo(FirstLayout).png" alt="Shopify-Logo"></span></a>
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h4>Daftar Barang Terbaru</h4>
        <!-- Slideshow -->
        <ul class="slideshow">
            <li><img src="shopify_logo/Slide_Show/SlideG.png" alt="ShopifyPromo-G" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide1.png" alt="ShopifyPromo-1" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide2.png" alt="ShopifyPromo-2" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide3.png" alt="ShopifyPromo-3" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide4.png" alt="ShopifyPromo-4" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide5.png" alt="ShopifyPromo-5" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide6.png" alt="ShopifyPromo-6" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide7.png" alt="ShopifyPromo-7" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide8.png" alt="ShopifyPromo-8" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide9.png" alt="ShopifyPromo-9" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide10.png" alt="ShopifyPromo-10" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide11.png" alt="ShopifyPromo-11" /></li>
        </ul>
    </div>
    
    <!-- Second Parallax Image with "Everyone can buy it." Text -->
    <div class="bgimg-2 w3-display-container parallax">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-wide">Everyone can buy it.</span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64">
        <div class="row">
            <h4>Promo Hari Ini</h4>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo1.jpg" alt="Promo"></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo2.jpg" alt="Promo"></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo3.jpg" alt="Promo"></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo4.jpg" alt="Promo"></a>
                </div>
            </div>

            <h4>Populer: Handphone &amp; Tablet</h4>
            <?php
            for($a=0;$a<32;$a++)
            {
                $queryproduk = mysql_query("SELECT * FROM produk WHERE produkID='$idtotal[$a]'",$connection);
                $rowtotal = mysql_fetch_assoc($queryproduk);
                $kat=$rowtotal['kategori'];
                $kat=str_replace(' ','',$kat);
            ?>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <?php echo "<img src=$kat/".$rowtotal['Foto'].">";?>
                    
                    <div class="caption">
                        <h6><?php echo $rowtotal['namaproduk'];?></h6>
                        <p><?php echo "Rp.".number_format($rowtotal['harga'],0,",",".");?></p>
                        <form action="Shopify-SecondPage/OrderUser.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $rowtotal['produkID'];?>">
                            <input type="submit" style="width:185px;" name="submit" value="Beli">
                        </form>
                    </div>
                </div>
            </div>
            <?php
            }?>
        </div>
    </div>


    <div class="w3-content w3-container w3-padding-64" id="endofpage">

    </div>


    <!-- Kembali ke atas -->
    <a href="#" class="scrollToTop" title="Kembali ke atas"></a>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 4000) {
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });
            $('.scrollToTop').click(function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>

    <footer>
        <div class="w3-container w3-sand w3-padding-32">
            <div class="w3-row">
                <div class="container">
                    <div class="w3-col m2 w3-center">
                        <div class="shop one"></div>
                        <h6>Aman</h6>
                        <p>Payment system Shopify menjamin keamanan uang Anda dalam bertransaksi.</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop two"></div>
                        <h6>Mudah</h6>
                        <p>Shopify menyediakan berbagai metode pembayaran untuk bertransaksi</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop three"></div>
                        <h6>Responsif</h6>
                        <p>CS Shopify siap membantu Anda melalui e-mail, media sosial dan call center </p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop four"></div>
                        <h6>Jasa pengiriman</h6>
                        <p>Shopify menyediakan berbagai pilihan jasa pengiriman dengan jangkauan nasional</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop five"></div>
                        <h6>Manfaat Penjual</h6>
                        <p>Dapatkan keuntungan seperti akses ke komunitas Shopify serta tips dan trik berjualan online</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop six"></div>
                        <h6>Akses dari Mobile</h6>
                        <p>Download aplikasi Shopify di Android dan iOS. Nikmati kemudahan jual beli dari gadget Anda</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-container w3-dark-grey w3-padding-32">
            <div class="w3-row">
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-green">Shopify</h5>
                    <a href="" class="w3-dark-grey">About us</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Contact us</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Blog</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Carier</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Hot News</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Terms and Conditions</a>
                    <br/>
                </div>
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-red">Customer</h5>
                    <a href="" class="w3-dark-grey">How to shop</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Payment</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Shopping tips</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Hot Items</a>
                    <br/>
                </div>
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-orange">Seller</h5>
                    <a href="" class="w3-dark-grey">How to sell</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Profit Selling</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Selling tips</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Seller Center</a>
                    <br/>
                </div>
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-blue">Download our application in</h5>
                    <a href=""><img class="logo" src="shopify_logo/icon/google-play-logo.png"></a>
                    <a href=""><img class="logo1" src="shopify_logo/icon/app_store.png"></a>
                    <a href="http://www.facebook.com">
                        <div class="logo2 satu"></div>
                    </a>
                    <a href="http://www.twitter.com">
                        <div class="logo2 dua"></div>
                    </a>
                    <a href="http://www.youtube.com">
                        <div class="logo2 tiga"></div>
                    </a>
                    <a href="http://www.plus.google.com/collections/featured">
                        <div class="logo2 empat"></div>
                    </a>
                    <a href="http://www.instagram.com">
                        <div class="logo2 lima"></div>
                    </a>
                    <a href="http://www.play.google.com/store">
                        <div class="logo2 enam"></div>
                    </a>
                    <a href="http://www.apple.com/itunes">
                        <div class="logo2 tujuh"></div>
                    </a>
                </div>
                <div class="right">
                    <img class="logo" src="shopify_logo/Shopify-Logo(FirstLayout).png" alt="shopify">
                </div>
            </div>
            <div class="w3-bottombar w3-border-gray">
            </div>
        </div>
    </footer>
</body>

</html>