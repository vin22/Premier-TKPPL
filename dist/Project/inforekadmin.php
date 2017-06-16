<?php
include('Shopify_RegisterPage/sessionaddcart.php');
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
$email=$_SESSION['login_user'];
$nama=mysql_query("select * from akun where email='$email'");
$column=mysql_fetch_assoc($nama);
$namauser=$column['nama'];
$bykkode= mysql_query("select * from pesan where binary email='$email' AND NOT statusbayar='Berhasil'", $connection);
$koloms=mysql_num_rows($bykkode);
if($koloms==1)
{
    $pesanrow=mysql_fetch_assoc($bykkode);
    $pesanid=$pesanrow['pesanID'];
    $login_session=$pesanid;
}

$query = mysql_query("select * from orderdetail inner join produk on produk.produkID=orderdetail.produkID where binary pesanID='$login_session'", $connection);
$num = mysql_num_rows($query);
if ($num > 0) {
    // Array the ID's...
    $produkrow= array($num);
    $quantityrow= array($num);
    $fotorow= array($num);
    $hargarow= array($num);
    $stokrow= array($num);
    $namarow= array($num);
    $kategorirow= array($num);
    $byk=0;
    while ($kolom_db = mysql_fetch_assoc($query)) {
        $produkrow [$byk]=$kolom_db['produkID'];
        $quantityrow[$byk]=$kolom_db['quantity'];
        $fotorow[$byk]=$kolom_db['Foto'];
        $hargarow[$byk]=$kolom_db['harga'];
        $stokrow[$byk]=$kolom_db['stok'];
        $namarow[$byk]=$kolom_db['namaproduk'];
        $kategorirow[$byk]=$kolom_db['kategori'];
        $totalrow[$byk]=$kolom_db['jumlahharga'];
        $byk++;
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .bgimg-1{
            margin-top:100px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Info Rek Admin | Shopify</title>
    <link rel="icon" href="shopify_logo/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="cart.css">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="CSS_Frameworks/W3.CSS/w3.css">
    <link rel="stylesheet" href="HomePage.css">
    
</head>
<!--/head-->

<body>
    <header>
        <nav>
            <div class="w3-top">
                <ul class="w3-navbar w3-left-align w3-large">
                    <li class="w3-hide-small w3-right"><a href="" class="w3-hover-white">About</a></li>
                    <li class="w3-hide-medium w3-right w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white" title="Profile"><?php echo $namauser; ?>&nbsp;<i class="fa fa-caret-down"></i></a>
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
                    <li><a href="Shopify-HomePage.php" class="homecolor"><i class="fa fa-home w3-margin-right"></i>Shop</a></li>
                    <li class="w3-hide-small w3-dropdown-hover dropdown-li">
                        <a href="#" class="w3-hover-white">Cari Barang</a>
                        <div class="w3-dropdown-content dropdown-color1 w3-card-4">
                            <form method="post" action="searchuser.php">
                            <label for="cari">Cari&#58;</label>
                            <input type="text" name="cari" id="cari" placeholder="Aku mau beli..." class="w3-round-medium" autocomplete="on">
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
    <!--/header-->
    <!--/#cart_items-->
    <section id="do_action">
        <div class="container bgimg-1">
            
            <div class="heading">
                <h1 class="w3-center w3-teal w3-padding-small">Informasi No Rekening Admin Yang Resmi</h1>
                <p class="w3-center"><i>Biaya pengiriman gratis bila Total Belanja lebih besar dari Rp.2.000.000</i></p>
                
            </div>
            <div class="container">
        <div class="w3-quarter w3-margin-bottom">
            <div class="w3-sand w3-border" style="width:260px">
                <h4 class="w3-text-cyan w3-btn w3-sand w3-hover-cyan" style="width:258px">Bank BCA</h4>
                <img src="shopify_logo/Bank/BCA-bank-logo-transparent.png" alt="BCA_LOGO" style="height:70px; margin:16px;" >
                <h4 class="w3-center">Vincent</h4>
                <h4 class="w3-center">Cab Krakatau</h4>
                <h4 class="w3-center">126 404 7227</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-sand w3-border" style="width:260px">
                <h4 class="w3-text-teal w3-btn w3-sand w3-hover-teal" style="width:258px">Bank BNI</h4>
                <img src="shopify_logo/Bank/Logo%20Bank%20BNI%20PNG.png" alt="BNI_LOGO" style="height:70px; margin:16px;" >
                <h4 class="w3-center">Jefri</h4>
                <h4 class="w3-center">Cab Asia</h4>
                <h4 class="w3-center">106 505 7117</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-sand w3-border" style="width:260px">
                <h4 class="w3-text-blue w3-btn w3-sand w3-hover-blue" style="width:258px">Bank BRI</h4>
                <img src="shopify_logo/Bank/bri-logo.png" alt="BRI_LOGO" style="height:70px; margin:16px 0px 15px 4px;" >
                <h4 class="w3-center">Steven Willington</h4>
                <h4 class="w3-center">Cab Irian Barat</h4>
                <h4 class="w3-center">151 404 8228</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-sand w3-border" style="width:260px">
                <h4 class="w3-text-indigo w3-btn w3-sand w3-hover-indigo" style="width:258px">Bank Mandiri</h4>
                <img src="shopify_logo/Bank/Logo-Bank-Mandiri-Transparent-Background.png" alt="MANDIRI_LOGO" style="height:70px; margin:10px 0px 20px 8px;" >
                <h4 class="w3-center">Christopher</h4>
                <h4 class="w3-center">Cab Katamso</h4>
                <h4 class="w3-center">131 404 7524</h4>
            </div>
        </div>
        
    </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area w3-margin-0">
                        <ul class="user_option" style="height:180px">
                            <h5 class="w3-btn w3-white w3-hover-light-grey" style="width:460px">No Faktur : <?php echo $login_session;?></h5>
                            <h5 class="w3-btn w3-white w3-hover-light-grey" style="width:460px">Tanggal Order : <?php $date=date('d-m-Y');
                            echo $date;?></h5>
                            <h5 class="w3-btn w3-white w3-hover-light-grey" style="width:460px">Total Harga : <?php 
                            $total=0;
                            for($i=0;$i<$byk;$i++)
                            {
                                $total+=$totalrow[$i];
                            }
                            echo "Rp.".number_format($total,0,",",".");?></h5><br>
                            <a class="w3-round-medium w3-hover-pale-red btn btn-default update w3-left w3-margin w3-red" href="Shopify-HomePage.php">Home</a>
                            <a class="w3-round-medium w3-hover-pale-red btn btn-default check_out w3-right w3-margin w3-red" href="confirmuser.php">Continue To Confirm</a>
                        </ul>
                        
                    </div>
                </div>
                <?php
                if($total>2000000)
                    $biaya=0;
                else
                    $biaya=50000;
                ?>
                <div class="col-sm-6">
                    <div class="total_area w3-margin-0">
                        <ul style="height:180px">
                            <li class="w3-margin-bottom">Total Belanja <span><?php echo "Rp.".number_format($total,0,",",".");?></span></li>
                            <li class="w3-margin-bottom">Biaya Pengiriman <span><?php echo "Rp.".number_format($biaya,0,",",".");?></span></li>
                            <li>Total Bayar<span><?php echo "Rp.".number_format($total+$biaya,0,",",".");?></span></li>
                            <a class="w3-round-medium btn btn-default check_out w3-right" href="bon.php">Check Bon</a>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--/#do_action-->
    
    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>S</span>hopify</h2>
                            <p>Kepercayaan Anda adalah Prioritas Kami.</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>Kini Kami Hadir di Seluruh Dunia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Online Help</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Order Status</a></li>
                                <li><a href="">Change Location</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">T-Shirt</a></li>
                                <li><a href="">Mens</a></li>
                                <li><a href="">Womens</a></li>
                                <li><a href="">Gift Cards</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privecy Policy</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href="">Billing System</a></li>
                                <li><a href="">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Company Information</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Store Location</a></li>
                                <li><a href="">Affillate Program</a></li>
                                <li><a href="">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" style="width:210px;" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from
                                    <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2016 Shopify Inc. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>